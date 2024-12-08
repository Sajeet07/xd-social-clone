<?php require('inc/header.php'); ?>
   
<main>

<div class="main-wrapper pt-80">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 order-1 order-lg-2 m-auto">

            <?php
$user_id = $_SESSION['id'];
$select_query = "SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id WHERE posts.user_id=$user_id";
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