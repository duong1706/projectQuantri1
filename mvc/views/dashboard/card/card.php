<div class="cards">
                
                <div class="card-single">
                    <div>
                        <h1><?php echo count($data['user']); ?></h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo count($data['pet']); ?></h1>
                        <span>Pets</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo count($data['bill'])?></h1>
                        <span>Oders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$<?php 
                        $tong = 0;
                            foreach($data['bill'] as $key => $value){
                                $tong += $value['totalprice'];
                            }
                            echo $tong;
                        ?></h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
    <div class="projects">
        <div class="card">
            <div class="card-header">
                <h3>Bill List</h3>
                <a href="<?php echo URL . 'dashboard/store'; ?>" ><button>Thêm <span class="las la-arrow-right"></a>
                
            </div>
            <div class="card-body">
                <div id="custo">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                        <th>So hoa don</th>
                                        <th>Nguoi mua</th>
                                        <th>Ngay</th>
                                        <th>Tong gia tri</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data['bill'] as $key => $value) { ?>
                                    <tr role="row" class="odd" id = "data-<?php echo $value['id']; ?>">
                                        <td class="name" data-id="<?php echo $value['id']; ?>"><?php echo $value['id']; ?></td>
                                        <td><?php echo $value['user']; ?></td>
                                        <td><?php echo $value['date']; ?></td>
                                        <td><?php echo $value['totalprice']; ?></td>   
                                        <td><a href="<?php echo URL . "dashboard/editbill/${value['id']}"; ?>">Edit</a></td>
                                        <td><a href="<?php echo URL . "dashboard/deletebill/${value['id']}"; ?>">Delete</a></td>
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

                            









            