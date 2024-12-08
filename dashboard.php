<?php require('inc/header.php'); ?>

    <main>

        <div class="main-wrapper pt-80">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 order-1 order-lg-2 m-auto">
                    <?php
                                if(isset($_POST['submit'])) {
                                    $details = $_POST['details'];
                                    $user_id = $_SESSION['id'];
                                    if($details!="")
                                    {
                                        $create_query = "INSERT INTO posts(user_id,details) VALUES('$user_id','$details')";
                                        $create_result = mysqli_query($conn, $create_query);
                                        if($create_result)
                                        {
                                            echo "Post is created successfully.";
                                        }
                                        else 
                                        {
                                            echo "Post couldn't created successfully.";
                                        }
                                    }
                                    else 
                                    {
                                        echo "Empty post can not be created.";
                                    }
                                }
                            ?>
                        <!-- share box start -->
                        <div class="card card-small">
                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-37.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->
                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div>
                                <!-- share content box end -->

                                <!-- Modal start -->
                                <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="#" method="POST" enctype=multipart/form-data>
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Share Your Mood</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body custom-scroll">
                                                    <textarea name="details" class="share-field-big custom-scroll" placeholder="What's on your mind ?"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                    <button type="submit" name="submit" class="post-share-btn">post</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                        <!-- share box end -->
<?php
$select_query = "SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id order by posts.id DESC";
$select_result = mysqli_query($conn,$select_query);
while($data=mysqli_fetch_array($select_result))
{
    ?>
                            <!-- post status start -->
                            <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.php?id=<?php echo $data['user_id']; ?>"><?php echo $data['name']; ?></a></h6>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>Edit</button></li>
                                            <li><button>Delete</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    <?php echo $data['details']; ?>
                                </p>
                            </div>
                        </div>
                        <!-- post status end -->
    <?php
}

?>



                    </div>

                </div>
            </div>
        </div>

    </main>

<?php require('inc/footer.php'); ?>