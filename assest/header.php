<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("blog-header");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("my-2")
  } else {
    navbar.classList.remove("my-2");
  }
}
</script>
<header class="blog-header border-bottom shadow-sm" style="background-color: #0A2272;">
    <div class="container-fluid" style="padding-left: 3rem; padding-right:3rem">

        <div class="d-flex flex-column flex-md-row align-items-center py-2">
            <a href="index.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <img src="img/logo/auriga.png" alt="dev culture logo" style="width: 120px; height: auto;">
            </a>

            <?php if ($loggedin && $_SESSION["level"] == 'admin') : ?>

                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="categories.php">Category</a>
                    <a class="p-2 px-5 text-muted" href="article.php">Article</a>
                    <a class="p-2 px-5 text-muted" href="author.php">Author</a>
                </nav>

            <?php else : ?>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted coba" href="articleOfCategory.php">Articles</a>
                </nav>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="<?= ($loggedin && $_SESSION["level"] == 'admin') ? '' : 'change_password/home.php'; ?>">
                <?= ($loggedin && $_SESSION["level"] == 'admin') ? '' : 'Change Password'; ?>
            </a>
                </nav>

            <?php endif;  ?>

            <a class="btn btn-outline-success" href="<?= ($loggedin && $_SESSION["level"] == 'admin') ? 'logout.php' : 'login.php'; ?>">
                <?= ($loggedin && $_SESSION["level"] == 'admin') ? 'Logout' : 'Login Admin'; ?>
            </a>

        </div>
    </div>
</header>