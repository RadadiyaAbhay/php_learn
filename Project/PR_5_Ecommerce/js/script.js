function borderDark(na) {
    na.style.border = '2px solid black';
}


var k ;
function borderDark1(na) {
    if(k != null){
        k.style.border = '0px';
    }
    na.style.border = '2px solid black';
    k = na;
}
var za;


function show(a) {
    if(za == a){
        var k =document.getElementById(`mdrop${a}`);
        if(k.style.display == 'none'){
            k.style.display = 'block';
        }else{
            k.style.display = 'none'
        }
    }else{

        za = a;
        var k =document.getElementById(`mdrop${a}`);
            k.style.display = 'block';
        hide(a);
    }
}

function  hide(m) {

    for(i=1 ; i<= 5 ; i++){
        if(m!=i){
            var b = document.getElementById(`mdrop${i}`);
            b.style.display = 'none';
        }
    }
}

function getCode(cx) {
    document.getElementById(`getCode${cx}`).innerHTML = `
    <h4 class="fw-bold text-center">Verify Your Identity
    </h4>
    <h6 class="fw-bold text-center">Enter the code sent to </h6>
    <h6 class="fw-bold text-center">abhsadfg145@gmail.com</h6>
    <form class="form pt-3">
        <div class="d-flex flex-row justify-content-evenly">
            <div class="col-1"></div>
            <input type="number" class="col-2 m-0 py-3 px-2 bg-white border-1 rounded-2">
            <input type="number" class="col-2 m-0 py-3 px-2 bg-white border-1 rounded-2">
            <input type="number" class="col-2 m-0 py-3 px-2 bg-white border-1 rounded-2">
            <input type="number" class="col-2 m-0 py-3 px-2 bg-white border-1 rounded-2">
            <div class="col-1"></div>
        </div>
    </form>
    <div class="d-flex flex-wrap justify-content-center ">
        <div class="col-12 d-flex justify-content-center py-1">
            <p class="text-center fw-semibold border-bottom border-black fit-width fs-8">SEND ANOTHER CODE</p>
        </div>
        <div class="col-12 d-flex justify-content-center py-1">

            <p class="text-center fw-semibold border-bottom border-black fit-width fs-8">TRY ANOTHER EMAIL</p>
        </div>
    </div>
    `
}

function favpopshow() {
    var pop = document.getElementById('favpop');

    if(pop.style.display == 'block'){
        pop.style.display = 'none';
    }else{
        pop.style.display = 'block';


    }
}

function favshow() {
    document.getElementById('popshow').style.display = 'flex';
}

function favpopshow() {
    document.getElementById('user-canva').innerHTML = `
    <div class="offcanvas-header">
    <button onclick="mainshow()" class="btn btn-light"><i class="bi bi-arrow-left"></i></button>
    <h5 class="offcanvas-title fw-bolder" id="offcanvasRightLabel">Favorites</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <div>
        <h5 class="fw-bolder">
            Collections
        </h5>
        <div class="border py-5 col-12 rounded-3 text-center fw-medium">No Collections Yet</div>
    </div>
    <div>
        <h5 class="fw-bolder pt-4 pb-3">
            All Favorites
        </h5>
        <div class="col-12 pb-2">
            <div class="d-flex flex-wrap ps-1 align-items-center">
                <div class="img  col-lg-3 col-4">
                    <div class="position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3 ">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);"><i class="bi bi-heart"></i></button>
                    </div>
                </div>
                <div class="col-lg-9 col-8 ps-2">
                    <h6 class="fw-bold">
                        Man I Love Frogs T-Shirt
                    </h6>
                    <div class="d-flex flex-wrap gap-2">

                        <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>GENDER</option>
                            <option value="1">Red</option>
                            <option value="2">Black</option>
                          </select>
                          <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>COLOUR</option>
                            <option value="1">MEN'S</option>
                            <option value="2">WOMEN'S</option>
                          </select>
                          <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>SIZE</option>
                            <option value="1">M</option>
                            <option value="2">XL</option>
                          </select>
                    </div>
                    <div class="py-2 d-flex gap-2">
                        <button class="btn btn-dark rounded-1 py-2 col-lg-9 col-8 fw-semibold fs-7">SELECT OPTIONS</button>
                        <button class="btn btn-secondary rounded-1 py-2 col-lg-2 text-center col-3   fw-semibold fs-5" onclick="favpopshow()"><i class="bi bi-three-dots"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pb-2">
            <div class="d-flex flex-wrap ps-1 align-items-center">
                <div class="img  col-lg-3 col-4">
                    <div class="position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3 ">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);"><i class="bi bi-heart"></i></button>
                    </div>
                </div>
                <div class="col-lg-9 col-8 ps-2">
                    <h6 class="fw-bold">
                        Man I Love Frogs T-Shirt
                    </h6>
                    <div class="d-flex flex-wrap gap-2">

                        <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>GENDER</option>
                            <option value="1">Red</option>
                            <option value="2">Black</option>
                          </select>
                          <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>COLOUR</option>
                            <option value="1">MEN'S</option>
                            <option value="2">WOMEN'S</option>
                          </select>
                          <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>SIZE</option>
                            <option value="1">M</option>
                            <option value="2">XL</option>
                          </select>
                    </div>
                    <div class="py-2 d-flex gap-2">
                        <button class="btn btn-dark rounded-1 py-2 col-lg-9 col-8 fw-semibold fs-7">SELECT OPTIONS</button>
                        <button class="btn btn-secondary rounded-1 py-2 col-lg-2 text-center col-3   fw-semibold fs-5" onclick="favpopshow()"><i class="bi bi-three-dots"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pb-2">
            <div class="d-flex flex-wrap ps-1 align-items-center">
                <div class="img  col-lg-3 col-4">
                    <div class="position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3 ">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);"><i class="bi bi-heart"></i></button>
                    </div>
                </div>
                <div class="col-lg-9 col-8 ps-2">
                    <h6 class="fw-bold">
                        Man I Love Frogs T-Shirt
                    </h6>
                    <div class="d-flex flex-wrap gap-2">

                        <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>GENDER</option>
                            <option value="1">Red</option>
                            <option value="2">Black</option>
                          </select>
                          <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>COLOUR</option>
                            <option value="1">MEN'S</option>
                            <option value="2">WOMEN'S</option>
                          </select>
                          <select class="col-5 fw-bold fs-7 text-black rounded-2">
                            <option selected>SIZE</option>
                            <option value="1">M</option>
                            <option value="2">XL</option>
                          </select>
                    </div>
                    <div class="py-2 d-flex gap-2">
                        <button class="btn btn-dark rounded-1 py-2 col-lg-9 col-8 fw-semibold fs-7">SELECT OPTIONS</button>
                        <button class="btn btn-secondary rounded-1 py-2 col-lg-2 text-center col-3   fw-semibold fs-5" onclick="favpopshow()"><i class="bi bi-three-dots"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rounded-4 bg-light " style="display: none;" id="favpop">
    <div class="d-flex align-items-center justify-content-between gap-2 px-4 py-3">
        <div class="d-flex align-items-center">
            <img src="img/product-1.png" class="img-fluid col-1 rounded-1" alt="">
            <h6 class="fw-bolder ps-3">Man I Love Frogs T-Shirts</h6>
        </div>
        <button type="button" class="btn-close" onclick="favpopshow()"></button>
    </div>
    <div class="px-4 pb-3">
        <ul>
            <li class="py-1">
                <a href="#" class="fs-8 fw-bolder">
                    ADD TO COLLECTION
                </a>
            </li>
            <li class="py-1">
                <a href="#" class="fs-8 text-danger fw-bolder">
                    REMOVE ITEM
                </a>
            </li>
        </ul>
    </div>
</div>
    `;
}

function mainshow() {
    document.getElementById('user-canva').innerHTML = `
    <div class="offcanvas-header">
    <h5 class="offcanvas-title fw-bolder" id="offcanvasRightLabel">Welcome</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body d-flex justify-content-between flex-column">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">

            <div class="user-canva container px-0" id="getCode1">
                <h4 class="fw-bold"> Save your cart items and shopping history, track and manage orders
                </h4>
                <form class="form">
                    <input type="text" class="py-2 px-2 m-0" placeholder="Email" size="22">
                    <input id="next" type="button" value="GET LOGIN CODE" class="fw-semibold w-100 rounded-2 ms-0" onclick="return getCode(1)" >
                </form>
                <p class="text-center">OR</p>
                <button class="button w-100 ">
                    <img src="https://img.icons8.com/color/48/undefined/google-logo.png" alt="google logo"
                        class="img">
                    <p>SIGN IN WITH GOOGLE</p>
                </button>
            </div>
            <div class="header-part d-flex mb-2 mt-3 border-top  pt-5">
                <h5>Recently viewed</h5><i class="bi bi-arrow-right-circle-fill ms-3 fs-4" ></i>
            </div>
            <div class="col-12 d-flex">
                <div class="col-3 me-1">
                    <div class="img position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);" onclick="return favshow()"><i class="bi bi-heart"></i></button>
                    </div>
                </div>
                <div class="col-3 me-1">
                    <div class="img position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);" onclick="return favshow()"><i class="bi bi-heart"></i></button>
                    </div>
                </div>
                <div class="col-3 me-1">
                    <div class="img position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);" onclick="return favshow()"><i class="bi bi-heart"></i></button>
                    </div>
                </div>
                <div class="col-3 me-1">
                    <div class="img position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);" onclick="return favshow()"><i class="bi bi-heart"></i></button>
                    </div>
                </div>
            </div>
            <div class="header-part d-flex mt-3 mb-2 pt-3">
                <h5>Saved frome cart</h5><i class="bi bi-arrow-right-circle-fill ms-3 fs-4"></i>
            </div>
            <div class="col-12 d-flex mb-2 border-bottom pb-4">
                <div class="col-3 me-1">
<div class="img position-relative">
                        <img src="img/product-2.webp" alt="product" class="img-fluid rounded-3">
                        <button class="position-absolute text-white rounded-circle border-0 pt-1 fw-dark" style="bottom: 5%; right:5%; background-color: rgba(0, 0, 0, 0.5);" onclick="return favshow()"><i class="bi bi-heart"></i></button>
                    </div>
                </div>

            </div>
                <div class="bg-dark col-11 text-white p-2 rounded-2 flex-wrap align-items-center position-absolute" style="bottom: 8%;display: none;" id="popshow">
                    <div class="col-1">
                        <img src="img/product-1.png" class="img-fluid rounded-2" alt="1">
                    </div>
                    <div class="col-lg-6 col-5 ps-2 fs-8">Item Saved</div>
                    <div class="col-lg-5 col-6  text-end">
                        <a onclick="favpopshow()" class="fw-bold fs-8 text-white ">
                            VIEW FAVORITES
                        </a>
                    </div>
                </div>
        </div>
        <div class="tab-pane fade mb-2 border-bottom" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="user-canva container px-0" id="getCode2">
                <h4 class="fw-bold"> Manage addresses and contact information
                </h4>
                <form class="form">
                    <input type="text" class="py-2 px-2 m-0" placeholder="Email" size="22">
                    <input id="next" type="button" value="GET LOGIN CODE" class="fw-semibold w-100 rounded-2 ms-0" onclick="return getCode(2)" >
                </form>
                <p class="text-center">OR</p>
                <button class="button w-100 ">
                    <img src="https://img.icons8.com/color/48/undefined/google-logo.png" alt="google logo"
                        class="img">
                    <p>SIGN IN WITH GOOGLE</p>
                </button>

            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
            <div class="user-canva container px-0" id="getCode3">
                <h4 class="fw-bold"> Manage orders, track shipments, start returns and access your wishlist.
                </h4>
                <form class="form">
                    <input type="text" class="py-2 px-2 m-0" placeholder="Email" size="22">
                    <input id="next" type="button" value="GET LOGIN CODE" class="fw-semibold w-100 rounded-2 ms-0" onclick="return getCode(3)" >
                </form>
                <p class="text-center">OR</p>
                <button class="button w-100 ">
                    <img src="https://img.icons8.com/color/48/undefined/google-logo.png" alt="google logo"
                        class="img">
                    <p>SIGN IN WITH GOOGLE</p>
                </button>

            </div>
            <div class="header-part d-flex flex-wrap mb-2 mt-3 border-top  pt-5 pb-3 border-bottom">
                <h5 class="col-12 fw-bold">Support</h5>
                <ul>
                    <li class="py-2 fw-semibold">FAQs</li>
                    <li class="py-2 fw-semibold">Shipping & Delivery</li>
                    <li class="py-2 fw-semibold">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


</div>
<div class="modal-footer d-block px-3 border-top col-12">
        <ul class="nav nav-pills mb-2 pt-0 col-12 " id="pills-tab" role="tablist">
            <li class="nav-item hovbortop py-2 col-4 text-center" role="presentation">
                <button class="bg-white border-0 fs-6 fw-semibold active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">For
                    You</button>
            </li>
            <li class="nav-item hovbortop py-2 col-4 text-center" role="presentation">
                <button class="bg-white border-0 fs-6 fw-semibold" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Orders</button>
            </li>
            <li class="nav-item hovbortop py-2 col-4 text-center" role="presentation">
                <button class="bg-white border-0 fs-6 fw-semibold" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">Profile</button>
            </li>
        </ul>
</div>
    `
}

