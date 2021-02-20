                                       <!-- Post comment card start -->
                                       <div class="card">
                                           <div class="card-header">
                                               <h5>Post Your Comment Here</h5>
                                               <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                           </div>
                                           <div class="card-block">
                                               <div class="j-wrapper j-wrapper-640">
                                                   <form action="j-pro/php/action.php" method="post" class="j-pro"
                                                       id="j-pro" novalidate="">
                                                       <div class="j-content">
                                                           <!-- start name -->
                                                           <div class="j-row">
                                                               <div class="j-span6 j-unit">
                                                                   <div class="j-input">
                                                                       <label class="j-icon-left" for="first_name">
                                                                           <i class="icofont icofont-ui-user"></i>
                                                                       </label>
                                                                       <input type="text" id="first_name"
                                                                           name="first_name" placeholder="First name"
                                                                           class="name-group">
                                                                   </div>
                                                               </div>
                                                               <div class="j-span6 j-unit">
                                                                   <div class="j-input">
                                                                       <label class="j-icon-left" for="last_name">
                                                                           <i class="icofont icofont-ui-user"></i>
                                                                       </label>
                                                                       <input type="text" id="last_name"
                                                                           name="last_name" placeholder="Last name"
                                                                           class="name-group">
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <!-- end name -->
                                                           <!-- start message -->
                                                           <div class="j-unit">
                                                               <div class="j-input">
                                                                   <label class="j-icon-left" for="message">
                                                                       <i class="icofont icofont-file-text"></i>
                                                                   </label>
                                                                   <textarea placeholder="Comments" spellcheck="false"
                                                                       id="message" name="message"></textarea>
                                                               </div>
                                                           </div>
                                                           <!-- end message -->
                                                           {{-- <!-- start ratings -->
                                                        <div class="j-unit">
                                                            <div class="j-rating-group">
                                                                <label class="j-label">Rating</label>
                                                                <div class="j-ratings">
                                                                    <input id="5q" type="radio" name="product_rating"
                                                                        value="5">
                                                                    <label for="5q">
                                                                        <i class="icofont icofont-star"></i>
                                                                    </label>
                                                                    <input id="4q" type="radio" name="product_rating"
                                                                        value="4">
                                                                    <label for="4q">
                                                                        <i class="icofont icofont-star"></i>
                                                                    </label>
                                                                    <input id="3q" type="radio" name="product_rating"
                                                                        value="3">
                                                                    <label for="3q">
                                                                        <i class="icofont icofont-star"></i>
                                                                    </label>
                                                                    <input id="2q" type="radio" name="product_rating"
                                                                        value="2">
                                                                    <label for="2q">
                                                                        <i class="icofont icofont-star"></i>
                                                                    </label>
                                                                    <input id="1q" type="radio" name="product_rating"
                                                                        value="1" checked="">
                                                                    <label for="1q">
                                                                        <i class="icofont icofont-star"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end ratings --> --}}
                                                           <!-- start response from server -->
                                                           <div class="j-response"></div>
                                                           <!-- end response from server -->
                                                       </div>

                                                       <!-- end /.content -->
                                                       <div class="j-footer">
                                                           <button type="submit" class="btn btn-primary">Post
                                                               comment</button>
                                                       </div>
                                                       <!-- end /.footer -->
                                                   </form>
                                               </div>
                                           </div>
                                           <div class="card-footer">
                                               <div class="p-b-30"> <span class="f-14"><a href="#">Comments
                                                           (110)</a></span><span class="f-right">see all comments</span>
                                               </div>
                                               <ul class="media-list">
                                                   <li class="media">
                                                       <div class="media-left">
                                                           <a href="#">
                                                               <img class="media-object img-radius comment-img"
                                                                   src="{{ url('admin2/files/assets/images/avatar-1.jpg') }}"
                                                                   alt="Generic placeholder image">
                                                           </a>
                                                       </div>
                                                       <div class="media-body">
                                                           <h6 class="media-heading">Sortino media<span
                                                                   class="f-12 text-muted m-l-5">Just now</span></h6>
                                                           <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla.
                                                               Nulla vel metus scelerisque ante sollicitudin commodo.
                                                               Cras
                                                               purus odio, vestibulum in vulputate at, tempus viverra
                                                               turpis.</p>
                                                           <div class="m-b-25">
                                                               <span><a href="#!"
                                                                       class="m-r-10 f-12">Reply</a></span><span><a
                                                                       href="#!" class="f-12">Edit</a> </span>
                                                           </div>
                                                           <hr>
                                                           <!-- Nested media object -->
                                                           <div class="media mt-2">
                                                               <a class="media-left" href="#">
                                                                   <img class="media-object img-radius comment-img"
                                                                       src="{{ url('admin2/files/assets/images/avatar-2.jpg') }}"
                                                                       alt="Generic placeholder image">
                                                               </a>
                                                               <div class="media-body">
                                                                   <h6 class="media-heading">Larry heading <span
                                                                           class="f-12 text-muted m-l-5">Just now</span>
                                                                   </h6>
                                                                   <p class="m-b-0"> Cras sit amet nibh libero, in
                                                                       gravida
                                                                       nulla. Nulla vel metus scelerisque ante
                                                                       sollicitudin
                                                                       commodo. Cras purus odio, vestibulum in vulputate
                                                                       at, tempus viverra turpis.</p>
                                                                   <div class="m-b-25">
                                                                       <span><a href="#!"
                                                                               class="m-r-10 f-12">Reply</a></span><span><a
                                                                               href="#!" class="f-12">Edit</a> </span>
                                                                   </div>
                                                                   <hr>
                                                                   <!-- Nested media object -->
                                                                   <div class="media mt-2">
                                                                       <div class="media-left">
                                                                           <a href="#">
                                                                               <img class="media-object img-radius comment-img"
                                                                                   src="{{ url('admin2/files/assets/images/avatar-3.jpg') }}"
                                                                                   alt="Generic placeholder image">
                                                                           </a>
                                                                       </div>
                                                                       <div class="media-body">
                                                                           <h6 class="media-heading">Colleen Hurst <span
                                                                                   class="f-12 text-muted m-l-5">Just
                                                                                   now</span></h6>
                                                                           <p class="m-b-0">Cras sit amet nibh libero,
                                                                               in
                                                                               gravida nulla. Nulla vel metus
                                                                               scelerisque
                                                                               ante sollicitudin commodo. Cras purus
                                                                               odio,
                                                                               vestibulum in vulputate at, tempus
                                                                               viverra
                                                                               turpis.</p>
                                                                           <div class="m-b-25">
                                                                               <span><a href="#!"
                                                                                       class="m-r-10 f-12">Reply</a></span><span><a
                                                                                       href="#!" class="f-12">Edit</a>
                                                                               </span>
                                                                           </div>
                                                                       </div>
                                                                       <hr>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <!-- Nested media object -->
                                                           <div class="media mt-2">
                                                               <div class="media-left">
                                                                   <a href="#">
                                                                       <img class="media-object img-radius comment-img"
                                                                           src="{{ url('admin2/files/assets/images/avatar-1.jpg') }}"
                                                                           alt="Generic placeholder image">
                                                                   </a>
                                                               </div>
                                                               <div class="media-body">
                                                                   <h6 class="media-heading">Cedric Kelly<span
                                                                           class="f-12 text-muted m-l-5">Just now</span>
                                                                   </h6>
                                                                   <p class="m-b-0">Cras sit amet nibh libero, in
                                                                       gravida
                                                                       nulla. Nulla vel metus scelerisque ante
                                                                       sollicitudin
                                                                       commodo. Cras purus odio, vestibulum in vulputate
                                                                       at, tempus viverra turpis.</p>
                                                                   <div class="m-b-25">
                                                                       <span><a href="#!"
                                                                               class="m-r-10 f-12">Reply</a></span><span><a
                                                                               href="#!" class="f-12">Edit</a> </span>
                                                                   </div>
                                                                   <hr>
                                                               </div>
                                                           </div>
                                                           <div class="media mt-2">
                                                               <a class="media-left" href="#">
                                                                   <img class="media-object img-radius comment-img"
                                                                       src="{{ url('admin2/files/assets/images/avatar-4.jpg') }}"
                                                                       alt="Generic placeholder image">
                                                               </a>
                                                               <div class="media-body">
                                                                   <h6 class="media-heading">Larry heading <span
                                                                           class="f-12 text-muted m-l-5">Just now</span>
                                                                   </h6>
                                                                   <p class="m-b-0"> Cras sit amet nibh libero, in
                                                                       gravida
                                                                       nulla. Nulla vel metus scelerisque ante
                                                                       sollicitudin
                                                                       commodo. Cras purus odio, vestibulum in vulputate
                                                                       at, tempus viverra turpis.</p>
                                                                   <div class="m-b-25">
                                                                       <span><a href="#!"
                                                                               class="m-r-10 f-12">Reply</a></span><span><a
                                                                               href="#!" class="f-12">Edit</a> </span>
                                                                   </div>
                                                                   <hr>
                                                                   <!-- Nested media object -->
                                                                   <div class="media mt-2">
                                                                       <div class="media-left">
                                                                           <a href="#">
                                                                               <img class="media-object img-radius comment-img"
                                                                                   src="{{ url('admin2/files/assets/images/avatar-3.jpg') }}"
                                                                                   alt="Generic placeholder image">
                                                                           </a>
                                                                       </div>
                                                                       <div class="media-body">
                                                                           <h6 class="media-heading">Colleen Hurst <span
                                                                                   class="f-12 text-muted m-l-5">Just
                                                                                   now</span></h6>
                                                                           <p class="m-b-0">Cras sit amet nibh libero,
                                                                               in
                                                                               gravida nulla. Nulla vel metus
                                                                               scelerisque
                                                                               ante sollicitudin commodo. Cras purus
                                                                               odio,
                                                                               vestibulum in vulputate at, tempus
                                                                               viverra
                                                                               turpis.</p>
                                                                           <div class="m-b-25">
                                                                               <span><a href="#!"
                                                                                       class="m-r-10 f-12">Reply</a></span><span><a
                                                                                       href="#!" class="f-12">Edit</a>
                                                                               </span>
                                                                           </div>
                                                                       </div>
                                                                       <hr>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <div class="media mt-2">
                                                               <div class="media-left">
                                                                   <a href="#">
                                                                       <img class="media-object img-radius comment-img"
                                                                           src="{{ url('admin2/files/assets/images/avatar-2.jpg') }}"
                                                                           alt="Generic placeholder image">
                                                                   </a>
                                                               </div>
                                                               <div class="media-body">
                                                                   <h6 class="media-heading">Mark Doe<span
                                                                           class="f-12 text-muted m-l-5">Just now</span>
                                                                   </h6>
                                                                   <p class="m-b-0">Cras sit amet nibh libero, in
                                                                       gravida
                                                                       nulla. Nulla vel metus scelerisque ante
                                                                       sollicitudin
                                                                       commodo. Cras purus odio, vestibulum in vulputate
                                                                       at, tempus viverra turpis.</p>
                                                                   <div class="m-b-25">
                                                                       <span><a href="#!"
                                                                               class="m-r-10 f-12">Reply</a></span><span><a
                                                                               href="#!" class="f-12">Edit</a> </span>
                                                                   </div>
                                                                   <hr>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </li>
                                               </ul>
                                               <nav aria-label="Page navigation example">
                                                   <ul class="pagination">
                                                       <li class="page-item">
                                                           <a class="page-link" href="#" aria-label="Previous">
                                                               <span aria-hidden="true">&laquo;</span>
                                                               <span class="sr-only">Previous</span>
                                                           </a>
                                                       </li>
                                                       <li class="page-item"><a class="page-link" href="#">1</a>
                                                       </li>
                                                       <li class="page-item active"><a class="page-link" href="#">2</a>
                                                       </li>
                                                       <li class="page-item"><a class="page-link" href="#">3</a>
                                                       </li>
                                                       <li class="page-item">
                                                           <a class="page-link" href="#" aria-label="Next">
                                                               <span aria-hidden="true">&raquo;</span>
                                                               <span class="sr-only">Next</span>
                                                           </a>
                                                       </li>
                                                   </ul>
                                               </nav>
                                           </div>
                                       </div>
                                       <!-- Post comment card end -->
