<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Best digital marketing, website designing and development agency offering professional services at an affordable pricing packages.">
    <meta name="keywords" content="The Digital House, Currency Tower, Digital Marketing">
    <meta name="author" content="The Digital House">
    <title>Digital Marketing | Web Design and Development Agency</title>
    <?php include 'assets/includes/head.php' ?>
</head>

<body>

    <?php include 'assets/includes/header.php' ?>

    <!-- Add this component anywhere in your page -->
<div class="sidebar-container">
  <div class="sidebar">
    <div class="search-bar">
      <input type="text" placeholder="Search..." id="sidebar-search" />
    </div>
    <ul class="sidebar-list">
      <li class="sidebar-item" data-content="content-1">Item 1</li>
      <li class="sidebar-item" data-content="content-2">Item 2</li>
      <li class="sidebar-item" data-content="content-3">Item 3</li>
      <li class="sidebar-item" data-content="content-4">Item 4</li>
      <li class="sidebar-item" data-content="content-5">Item 5</li>
    </ul>
  </div>
  <div class="content-container-advertisement">
    <div id="content-1" class="content-section active">
      <h2>Content for Item 1</h2>
      <p>This is some content for Item 1.</p>
      <img src="https://via.placeholder.com/400x200" alt="Placeholder for Item 1" />
    </div>
    <div id="content-2" class="content-section-advertisement">
      <h2>Content for Item 2</h2>
      <p>This is some content for Item 2.</p>
      <video controls>
        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>
    <div id="content-3" class=".content-section-advertisement">
      <h2>Content for Item 3</h2>
      <p>This is some content for Item 3.</p>
    </div>
    <div id="content-4" class=".content-section-advertisement">
      <h2>Content for Item 4</h2>
      <p>This is some content for Item 4.</p>
    </div>
    <div id="content-5" class=".content-section-advertisement">
      <h2>Content for Item 5</h2>
      <p>This is some content for Item 5.</p>
    </div>
  </div>
</div>
<!--  -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sidebarItems = document.querySelectorAll(".sidebar-item");
    const contentSections = document.querySelectorAll(".content-section-advertisemnt");

    sidebarItems.forEach((item) => {
      item.addEventListener("click", function () {
        // Remove 'active' class from all sections
        contentSections.forEach((section) => section.classList.remove("active"));

        // Get the associated content section
        const contentId = this.getAttribute("data-content");
        document.getElementById(contentId).classList.add("active");
      });
    });

    // Search functionality
    const searchInput = document.getElementById("sidebar-search");
    searchInput.addEventListener("input", function () {
      const searchQuery = this.value.toLowerCase();
      sidebarItems.forEach((item) => {
        const text = item.textContent.toLowerCase();
        item.style.display = text.includes(searchQuery) ? "block" : "none";
      });
    });
  });
</script>

<?php include 'assets/includes/footer.php' ?>
<?php include 'assets/includes/scripts.php' ?>
</body>
</html>
