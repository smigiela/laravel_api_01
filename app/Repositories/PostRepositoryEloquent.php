<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Post;
use App\Validators\PostValidator;
use Illuminate\Http\Concerns\InteractsWithInput;
use Intervention\Image\Image;

/**
 * Class PostRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PostRepositoryEloquent extends BaseRepository implements PostRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */


    public function model()
    {
        return Post::class;
    }


    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PostValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * @param $params
     * @param $image
     */
    public function savePost($params, $image)
    {
        $post = new Post;
        $post->fill($params);

        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('img/blog/' . $filename);
        (new \Intervention\Image\Image)->make($image)->save($location);

        $post->image = $filename;

        $post->save();
    }
}
