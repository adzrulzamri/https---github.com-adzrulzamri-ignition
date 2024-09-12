<header class="py-5 mb-5 bg-primary bg-gradient text-center py-2 text-bold">
        <h2 class="text-white fw-bold">Sign Up</h2>
        <p class="lead text-white">it quick and easy</p>

    </header>
    
    <section class="container py-5 pb-5">
            <div class="card">
                <div class="card-header bg-primary">
                    Register
                </div>
                <div class="text-start card-body">
                    <form method="post" action="<?php echo base_url();?>register">
                    <div class="">
                        <p class="fw-bold">Full Name</p>
                        <input name="name" type="text" class=" input-group form-control " placeholder="Please enter your full name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="">
                        <p class="fw-bold">Username</p>
                        <input name="username" type="text" class=" input-group form-control " placeholder="Please enter your Username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="">
                        <p class="fw-bold">Email</p>
                        <input name="email" type="text" class=" input-group form-control " placeholder="Please enter your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="">
                        <p class="fw-bold">Password</p>
                        <input name="password" type="text" class=" input-group form-control " placeholder="Please enter your Password" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="text-start py-4">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>

                </form>
            </div>
    </section>
