@extends('layouts.template')

@section('content')

<div class="container-fluid menus py-5">
    <div class="container py-5">
        <h1 class="mb-4">Order Now</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="fruits">Default Sorting:</label>
                            <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                <option value="0">None</option>
                                <option value="1">-</option>
                                <option value="2">-</option>
                                <option value="3">-</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Categories</h4>
                                    <ul class="list-unstyled menus-categorie">
                                        <li>
                                            <div class="d-flex justify-content-between menus-name">
                                                <a href="#"><i class="fas fa-bread-slice"></i>&nbsp;&nbsp; Breakfast</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menus-name">
                                                <a href="#"><i class="fas fa-utensils"></i>&nbsp;&nbsp; Main Dish</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menus-name">
                                                <a href="#"><i class="fas fa-cookie"></i>&nbsp;&nbsp; Snack</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menus-name">
                                                <a href="#"><i class="fas fa-wine-glass"></i>&nbsp;&nbsp; Beverages</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between menus-name">
                                                <a href="#"><i class="fas fa-coffee"></i>&nbsp;&nbsp; Coffee</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4 class="mb-2">Price</h4>
                                    <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="100" value="0" oninput="amount.value=rangeInput.value">
                                    <output id="amount" name="amount" min-velue="0" max-value="100" for="rangeInput">0</output>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="mb-3">Featured products</h4>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('images/menus/CakweeCoffee.jpg') }}" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Cakwe and Coffee</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rp. 35.000</h5>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('images/menus/Pempek Palembang.jpg') }}" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Pempek Palembang</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rp. 40.000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('images/menus/Porto_s Big Breakfast.jpeg') }}" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Porto’s Big Breakfast</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rp. 60.000</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Porto_s Big Breakfast.jpeg') }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">BREAKFAST</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Porto’s Big Breakfast</h4>
                                        <p>A satisfying meal with Balinese Pork Sausage, pork bacon crisp, jiggly scramble egg, french toast and vegetable.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 60.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Burger (Pad).jpeg') }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">BREAKFAST</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Porto’s Burger (Chicken/Beef)</h4>
                                        <p>100% homemade signature blend beef or chicken patty topped with cheddar, lettuce, tomato and sunny side up</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 60.000 - 68.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Classic French Toast.jpeg') }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">BREAKFAST</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Classic French Toast</h4>
                                        <p>Classic French Toast with 5 choice of Topping (Plain, Srikaya, Nutella, Skippy,Special Mix)</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 15.000 - 25.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Sandwich.jpeg') }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">BREAKFAST</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Porto’s Sandwich (三明治)</h4>
                                        <p>Slices of smoked Beef with cheese and egg, paired with Porto’s super soft sandwich bread.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 32.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Oriental Sandwich.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">BREAKFAST</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Oriental Sandwich (雞排蔥油餅)</h4>
                                        <p>Crispy Chinese, savory scallion pancake or known as Cong You Bing served with juicy chicken thigh, egg and fresh vegetables in the most Oriental way.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 35.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Ropang.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">BREAKFAST</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>RoPang</h4>
                                        <p>Classic Bread Toast with 10 choice of Topping (Chocolate / Cheese / Choco Cheese / Banana Choco Cheese / Srikaya / Biscoff / Nutella / Skippy / Ovomaltine / Special Mix)</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 18.000 - 25.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Nasi Goreng HK01.jpg') }}"menus-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Nasi Goreng HK</h4>
                                        <p>Little cubes of luncheon meat hit a hot greased wok and start getting delightfully crisp, mixing with egg, rice and home seasoning transformed into delicious HK Style Fried Rice.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 42.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/nasgortomyam.png') }}"menus-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Nasi Goreng Tom Yum</h4>
                                        <p>Thai Style fried rice served with prawn, wedges of tomato and pineapple for a truly authentic experience, giving a refreshing twist to your taste bud.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 42.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/nasgor kampung.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Nasi Goreng Kampung</h4>
                                        <p>Countryside fried rice with diced chicken meat and ikan teri, dish up with fried egg, acar and emping</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 40.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/MieTomat2.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Mie Tomat / Telur</h4>
                                        <p>This Authentic Medan noodle dish is served with an aromatic broth made of fresh tomato and egg drop that bring a great taste.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 40.000 - 45.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/PorkThaiBasil.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Pork Thai Basil (泰式羅勒豬肉飯) </h4>
                                        <p>A Stir fry fresh ground pork with fragrant Thai Basil, giving the taste of slightly spicy, salty and sweet, the perfect taste blend.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 42.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/khewnyuk.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Khew Nyuk Bowl</h4>                                        </h4>
                                        <p>The Famous Hakka dish, also known as Kou Rou (扣肉), braised pork belly with dried pickled Chinese mustard.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 75.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/sweet n sour.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Sweet and Sour Chicken Bowl</h4>
                                        <p>Chicken, pineapple, cucumber and bell pepper coated in sweet Zand sour sauce. Crispy on the outside, juicy on the inside.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 42.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Sambal Matah Bowl.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Sambal Matah Bowl</h4>
                                        <p>A choice of Rice Bowl or Indomie Goreng served with Bali Pork Sausage and sunny side up, paired with heavenly Sambal Matah.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 28.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/linguine carbonara01.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Linguine Carbonara</h4>
                                        <p>Creamy linguine pork bacon cooked together and tossed in a cheesy, rich egg yolk mixture.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 45.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Spaghetti Aglio Olio.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">MAIN DISH</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Spaghetti Aglio Olio</h4>
                                        <p>Lightly sauteeing sliced pork bacon and sausages, minced garlic in olive oil, with the addition of dried red chili flakes and basil, tossing with spaghetti.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 40.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/KueTalas.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">SNACK</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Kue Talas (芋頭糕)</h4>
                                        <p>Served in a portion of 2 pieces of yam cake, made with loads of diced yam, lap cheong, mushroom and dried prawn.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 33.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Kue Lobak.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">SNACK</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Kue Lobak (菜頭糕)</h4>
                                        <p>Served in a portion of 5 petite pieces of radish cake, made with fresh white radish, lap cheong and dried prawn. It can be served in either Pan-fried or Steam.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 30.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Pempek Palembang.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">SNACK</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Pempek Palembang</h4>
                                        <p>Deep-fried savoury fishcakes (kapal selam, adaan, kulit, keriting, lenjer) served with its signature dark fiery sweet and sour sauce.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 40.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Singkong Goreng.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">SNACK</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Singkong Goreng</h4>
                                        <p>Thick wedges, deep-fried into golden brown, which makes them crispy on the outside and soft but densely textured on the inside.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 30.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Pisang Goreng.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">SNACK</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Pisang Goreng</h4>
                                        <p>Banana covered in batter deep-fried to golden brown. Special : Pisang Goreng flooded with shredded cheese, chocolate meises, and condensed milk.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 30.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/Siomay.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">SNACK</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Siomay</h4>
                                        <p>Siomay filled with fresh ground pork and prawn, steamed to give you the perfect juicy meaty snack</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 32.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative menus-item">
                                    <div class="menus-img">
                                        <img src="{{ asset('images/menus/CakweeCoffee.jpg') }}"menus-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">SNACK</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Cakwe and Coffee (油炸鬼 黑咖啡)</h4>
                                        <p>Deep fried strip of dough in lightly salted and a cup of coffee.</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">Rp. 35.000</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection