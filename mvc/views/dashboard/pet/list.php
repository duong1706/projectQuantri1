<div class="recent-grid">
    <div class="projects">
        <div class="card">
            <div class="card-header">
                <h3>Pet List</h3>
                <a href="<?php echo URL . 'pet/store'; ?>" ><button>Thêm <span class="las la-arrow-right"></a>
                
            </div>
            <div class="card-body">
                <div id="custo">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                        <th>Ten Pet</th>
                                        <th>Hinh Anh</th>
                                        <th>Content</th>
                                        <th>Color</th>
                                        <th>Price</th>
                                        <th>Star</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data['pet'] as $key => $value) { ?>
                                    <tr role="row" class="odd" id = "data-<?php echo $value['idPet']; ?>">
                                        <td class="name" data-id="<?php echo $value['idPet']; ?>"><?php echo $value['name']; ?></td>
                                        <td class="img12"><img src="<?php echo URL . 'public/style/images/' . $value['image']; ?>" alt="<?php echo $value['image']; ?>"></td>
                                        <td><?php echo $value['content']; ?></td>
                                        <td><?php echo $value['color']; ?></td>
                                        <td><?php echo $value['price']; ?></td>    
                                        <td><?php echo $value['star']; ?></td>
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

                            








