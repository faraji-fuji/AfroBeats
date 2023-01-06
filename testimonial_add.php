<?php
include("header_member.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // extract and sanitize data
    $data = [
        'name' => htmlspecialchars(stripslashes(trim($_POST['name']))),
        'comment' => htmlspecialchars(stripslashes(trim($_POST['comment']))),
    ];

    // save data
    $testimonialmodel = new TestimonialModel();
    $testimonialmodel->insert($data);
}

?>

<section>
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                <h3 class="text-center">Testimonial</h3>
                <form role="form" id="contact-form" method="POST" autocomplete="off" action="testimonial_add.php">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-dynamic mb-4">
                                    <label class="form-label">First Name</label>
                                    <input class="form-control" aria-label="First Name..." type="text" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-4 input-group-static">
                            <label>Your Comment</label>
                            <textarea name="comment" class="form-control" id="message" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>