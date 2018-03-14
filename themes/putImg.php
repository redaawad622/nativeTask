<?php
include "init.inc" ;
include $template."header.inc" ;
include $template."nav.inc" ;

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    $date=date('Y-m-d',strtotime($_POST['date']));

    $uploads_dir = '../upload';
    foreach ($_FILES["pictures"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["pictures"]["tmp_name"][$key];

            $name = basename($_FILES["pictures"]["name"][$key]);
            if(move_uploaded_file($tmp_name, "$uploads_dir/$name"));
            {
                echo 'ddd';

            }

        }


    }
}
else
{
    echo 'sacas';
}

?>



<div class="all">
    <div class="list_create">
        <div class="inner">
            <h2>Add A New Image</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="label-icon"><i class="fas fa-calendar-alt"></i></label>
                    <input type="date" class="form-control" name="date" placeholder="date" required>
                </div>

                <div class="form-group">
                    <label class="label-icon"><i class="far fa-images"></i></label>
                    <input type="file"  class="form-control" name="pictures[]" placeholder="image" multiple="multiple" required />

                </div>
                <div class="all_button">

                    <button type="submit" class="btn btn-1"><i class="fas fa-save"></i>  Save</button>

                </div>
            </form>
        </div>

    </div>

</div>

<?php include $template."footer.inc"; ?>

