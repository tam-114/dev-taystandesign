<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$conn = new mysqli('localhost', 'u860659559_DevDB_2526', 'TAQ8+fb7?vb-LrY', 'u860659559_taystandes_db');

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the tag ID from the URL parameter and handle the case where it's missing
$id = isset($_GET['id']) ? intval($_GET['id']) : null;


// Initialize the $result variable
$result = null;

if ($id !== null) {
    // Query for the specific tag
    $query = "SELECT p.* FROM projects p 
              JOIN Project_Tags pt ON p.id = pt.project_id 
              WHERE pt.tag_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
} else {
    // Query to get all projects
    $query = "SELECT * FROM projects";
    $stmt = $conn->prepare($query);
}

// Execute the statement and fetch results
if ($stmt) {
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    die("Error: " . $conn->error);
}

// Fetch all projects
$projects = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
?>

<section class="section-padding">
    <div class="container pb-0">
        <div class="d-flex align-items-center flex-column pb-3" data-aos="fade-up" data-aos-duration="1500">
                <div class="text-center">
                    <h4 class="subtitle-text">Client Projects</h4>
                    <h1 class="h1-text">Turning <span class="highlight">Ideas</span> Into Interactive Experiences</h1>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <p class="p-text text-center">Explore my portfolio to see how creativity meets functionality. Each project is crafted with care to deliver results, inspire users, and bring visions to reality.</p>
                </div>
            </div>
        <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="< ?php echo BASE_URL; ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
        </ol>
        </nav> -->
    </div>
  
<?php
// Sort projects by date in descending order (most recent first)
usort($projects, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

foreach ($projects as $index => $project) { 
    $image = $project['image'] ? $project['image'] : 'default-image.jpg';
    $path = isset($project['path']) ? $project['path'] : '';
    $url = BASE_URL . $path;

    // Determine the order: odd index starts with image, even index starts with text
    $isImageFirst = $index % 2 === 0;
    ?>

    <div class='container project'>
        <div class="row row-cols-lg-2 row-cols-1 flex-lg-row flex-column justify-content-center align-items-center projects-card" data-aos="fade-up" data-aos-duration="1500">
            <?php if ($isImageFirst): ?>
                <div class="col">
                    <img src="<?php echo './assets/images/' . $image ?>" alt="<?php echo $project['title']; ?>" class="img-fluid">
                </div>
                <div class="col">
                    <span class="tag"><?php echo $project['tag'] ?></span>
                    <h2><?php echo $project['title']; ?></h2>
                    <p>  End Date:    
                        <?php 
                            $date = new DateTime($project['date']); 
                            echo $date->format('M d, Y');
                        ?>
                    </p>
                    <p><?php echo htmlspecialchars_decode($project['description']); ?></p>
                    <!-- <a href="< ?php echo 'projects/' . $project['path']; ?>" class="button-primary">View project</a> -->
                </div>
            <?php else: ?>
                <div class="col">
                <span class="tag"><?php echo $project['tag'] ?></span>
                    <h2><?php echo $project['title']; ?></h2>
                    <p>      
                        <?php 
                            $date = new DateTime($project['date']); 
                            echo $date->format('M d, Y');
                        ?>
                    </p>
                    <p><?php echo htmlspecialchars_decode($project['description']); ?></p>
                    <!-- <a href="< ?php echo 'projects/' . $project['path']; ?>" class="button-primary">View project</a> -->
                </div>
                <div class="col">
                    <img src="<?php echo './assets/images/' . $image ?>" alt="<?php echo $project['title']; ?>" class="img-fluid">
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php
}
?>

</section>