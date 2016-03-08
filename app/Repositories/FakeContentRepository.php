<?php
/**
 * Created by PhpStorm.
 * User: vnzac
 * Date: 3/8/2016
 * Time: 10:24 PM
 */

namespace App\Repositories;


use App\Models\FakeContent;

class FakeContentRepository extends BaseRepository
{

    public function __construct(FakeContent $faceContent)
    {
        $this->model = $faceContent;
    }

    /**
     * Create new record
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes = array())
    {
        $attributes['user_id'] = current_user()->id;
        $attributes['code'] = str_random(10);
        return $this->model->create($attributes);
    }
    /**
     * Update a record
     *
     * @param $model
     * @param array $attributes
     * @return mixed
     */
    public function update($model, array $attributes = array())
    {
        $attributes['code'] = str_random(10);
        return $model->update($attributes);
    }

}