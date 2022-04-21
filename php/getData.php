<?php
include("config.php");

$sql = "select * from posts  ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>

<div class="container">
    <div class="row">
        <div class="col-sm-11 mx-auto">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Blogs Section </h2>
                    <div class="card p-4">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Post Date</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col"> Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 1;
                                        while ($data = mysqli_fetch_array($result)) {                                        
                                            
                                    ?>
                                    <tr>
                                        <td> <?php echo $i ?> </td>
                                        <td><?php echo $data['title'] ?> </td>
                                        <td><?php echo $data['description'] ?></td>
                                        <td><?php echo $data['post_at'] ?></td>
                                        <td><button class="btn-sm btn-outline-primary" onclick="editData(<?php echo $data['id'] ?>)">Edit</button></td>
                                        <td><button class="btn-sm btn-outline-danger" onclick="deleteData(<?php echo $data['id'] ?>)">Delete</button></td>
                                    </tr>
                                   <?php $i++; }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/deleteData.js"></script>