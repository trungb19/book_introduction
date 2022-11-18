<?php $this->layout("layouts/default/default", ["title" => APPNAME]) ?>

<?php $this->start("page"); ?>
<?php 
  use Illuminate\Database\Capsule\Manager as DB;

  $dt = DB::table('user')->where('UserID', $_SESSION['user'])->first();
?>