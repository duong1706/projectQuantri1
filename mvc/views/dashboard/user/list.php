<div class="recent-grid">
    <div class="projects">
        <div class="card">
            <div class="card-header">
                <h3>Users List</h3>
                <a href="<?php echo URL . 'user/addUser'; ?>" ><button>Thêm <span class="las la-arrow-right"></a>
                
            </div>
            <div class="card-body">
                <div id="custo">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                        <th>Name</th>
                                        <th>UserName</th>
                                        <th>Gmail</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data['user'] as $key => $value) { ?>
                                    <tr role="row" class="odd">
                                        <td><?php echo $value['name']; ?></td>
         
                                        <td><?php echo $value['username']; ?></td>
                                        <td><?php echo $value['gmail']; ?></td>
                                       
                                        <td><a href="<?php echo URL . "pet/edit/${value['idPet']}"; ?>">Edit</a></td>
                                        <td><a href="<?php echo URL . "pet/delete/${value['idPet']}"; ?>">Delete</a></td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> 
        </div>
    </div>
</div>

                            








