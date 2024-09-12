<header class="py-5 mb-5 bg-primary bg-gradient text-center text-bold">
        <h2 class="text-white fw-bold">Login</h2>
        <p class="lead text-white">it quick and easy</p>

    </header>
    
    <section class="container py-5 pb-5">
            <div class="card">
                <div class="card-header bg-primary">
                    Login
                </div>
                <div class="text-start card-body">
                    <form method="post" action="<?php echo base_url();?>login">
                    <div class="">
                        <p class="fw-bold">Email</p>
                        <input name="email" type="text" class=" input-group form-control " placeholder="Please enter your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="">
                        <p class="fw-bold">Password</p>
                        <input name="password" type="text" class=" input-group form-control " placeholder="Please enter your Password" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="text-start py-4 d-grid gap-2 mx-auto">
                        <button  type="submit" class="btn btn-primary">Submit</button>

                    
                    </div>
                    </form>
                </div>

                
            </div>
    </section>