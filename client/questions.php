<div class="container">
<div class="row">
<div class="col-8">
<h1 class="heading"> Questions</h1>

<?php 
include("./common/db.php");

if (isset($_GET["c-id"])) {

    $cid = (int) $_GET["c-id"];

    $stmt = $conn->prepare("SELECT * FROM questions WHERE category_id = ?");
    $stmt->bind_param("i", $cid);

}else  if (isset($_GET["u-id"])) {

$uid = $_SESSION['uid'] ?? null;

    $stmt = $conn->prepare("SELECT * FROM questions WHERE user_id = ?");
    $stmt->bind_param("i", $uid);
}
else  if (isset($_GET["latest"])) {

    $stmt = $conn->prepare("SELECT * FROM questions order by id desc");
}
else  if (isset($_GET["search"])) {

    $stmt = $conn->prepare("SELECT * FROM questions where `title` LIKE '%$search%' ");
}
else if(isset($_POST['delete'])){
    $delete_id = $_POST['delete_id'];
    $uid = $_SESSION['uid'];

    $stmt = $conn->prepare("DELETE FROM questions WHERE id = :id AND user_id = :uid");

    $stmt->execute([
        ':id' => $delete_id,
        ':uid' => $uid
    ]);
}
else {
    $stmt = $conn->prepare("SELECT * FROM questions");
}

$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {

    $title = $row['title'];
    $id = $row['id'];
    $uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : null;

    echo "<div class='row question-list'>
        <h4 class='my-question'>
            <a href='?q-id=$id'>$title</a>";

if($uid){
    echo " <a href='./server/requests.php?delete=$uid'>Delete</a>";
}

echo "    </h4>
      </div>";
}

?>

</div>

<div class="col-4">
<?php include('./client/categorylist.php'); ?>
</div>

</div>
</div>