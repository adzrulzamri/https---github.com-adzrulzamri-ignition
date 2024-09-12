<section class="container py-5 pb-5">
        <h2>Add New Task</h2>
        <div class="card">
            <div class="text-start card-body">
                <h2>Task details</h2>
                <p>please enter the detail of the task you want to enter</p>
                <form method="post" action="<?php echo base_url();?>task">
                <div class="input-group">
                    <label class="col-2 fw-bold" for="">Title</label>
                    <input name="title" type="text" class=" input-group form-control "  aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group">
                    <label class="col-2 fw-bold" for="">Description</label>
                    <input name="description" type="text" class=" my-2 input-group form-control " aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group">
                    <label class="col-2 fw-bold" for="">Due date</label>
                    <input name="duedate"type="date" class=" input-group form-control " aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="text-start py-4 d-grid gap-2 mx-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
                </form>
            </div>

            
        </div>
    </section>