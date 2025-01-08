<?php
use yii\helpers\html;
/** @var yii\web\View $this */

$this->title = 'CRUD';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:#337ab7;">YII2 CRUD APPLICATION TUTORIAL!</h1>

        
    </div>

    <div class="body-content">

        <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">description</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>
        <span><?= Html::a('View') ?></span>
        <span><?= Html::a('Update') ?></span>
        <span><?= Html::a('Delete') ?></span>
      </td>
    </tr>
  </tbody>
</table>
        </div>

    </div>
</div>
