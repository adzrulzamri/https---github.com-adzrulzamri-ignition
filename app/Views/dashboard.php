<header class="py-5 text-center text-bold">
        <h1 class="text-dark fw-bold">Welcome to Task Management</h1>
        <h6 class="lead py-2 text-dark">manage your task effectively and efficenly</h6>
        <a href="<?php echo base_url('task');?>" class=" py-2 btn btn-primary">Add New Task</a>
    </header>

    <section class="py-5">
        <div class="container text-center">
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Due date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                <?php $id = 1; foreach ($task as $task):?>    
                <tr>
                <td><?=$id?></td>
                            <td><?= $task['title'] ?></td>
                            <td><?= $task['description'] ?></td>

                            <td><?=$task['due_date']?></td>
                            <td><?php echo $status[$task['status']]; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>update/<?= $task['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                                <a href="<?php echo base_url();?>delete/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php $id++;
                 endforeach; ?>
                </tbody>
                
                
            </table> 
        </div>
    </section>