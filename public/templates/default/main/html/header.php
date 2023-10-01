<header>
    <script>

    </script>
    <div id="header" class=" row">
        <div id="logo" class="col-sm-2">
            <p class="text-dark text-decoration-none">
                <span onclick="location.href='index'">Gentle Monster</span>
            </p>
        </div>
        <div id="list" class="text-center col-sm-9">
            <ul class=" list-unstyled mt-3">
                <li class="m-3 mt-0 mb-0 d-inline-block">
                    <p onclick="location.href='Sunglasses'">Sunglasses</p>
                </li>
                <li class="m-3 mt-0 mb-0 d-inline-block">
                    <p onclick="location.href='Glasses'">Glasses</p>
                </li>
                <li class="m-3 mt-0 mb-0 d-inline-block">
                    <p onclick="location.href='Collaborations'">Collaborations</p>
                </li>
                <li class="m-3 mt-0 mb-0 d-inline-block">
                    <p onclick="location.href='Styles'">Styles</p>
                </li>
                <li class="m-3 mt-0 mb-0 d-inline-block">
                    <p onclick="location.href='Stories'"> Stories</p>
                </li>
                <li class="m-3 mt-0 mb-0 d-inline-block">
                    <p onclick="location.href='Stores'"> Stores</p>
                </li>
                <li class="m-3 mt-0 mb-0 d-inline-block">
                    <p onclick="location.href='Services'"> Services</p>
                </li>

            </ul>
        </div>
        <div id="list_Login" class="col-sm-4">
            <ul class=" list-unstyled mt-3">
                <li class=" d-inline-block text-dark">
                    <button type="button" class=" bg-white border-0" id="myBtn">
                        <i class="fas fa-search"></i>
                    </button>

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-xl modal-full-width">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <input type="text" name="" id="" placeholder="Search.................">
                                    <button type="button" class="close bg-dark" data-dismiss="modal" style="border-radius: 200px;"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></button>
                                </div>
                                <!-- <div class="modal-body">
                                    <p>This modal has a dark overlay.</p>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </li>
                <li class=" d-inline-block text-dark">
                    <button type="submit" class=" bg-white border-0" id="myBtn2">
                        Shop in VN
                    </button>

                    <div class="modal" id="myModal2" role="dialog">
                        <div class="modal-dialog ">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title">Please select your Location</p>
                                    <button type="button" class="close bg-white border-0" data-dismiss="modal"><img src="public/templates/default/main/assets/images/icons/icon-close.png" alt=""></button>
                                </div>
                                <div class="modal-body">
                                    <select name="money">
                                        <option value="#">Please select your shipping country or area</option>
                                        <option value="usd">America(USD)</option>
                                        <option value="vn">Vietnam(USD)</option>
                                        <option value="usd">Canada(USD)</option>
                                    </select>
                                    <div class="submit_change">
                                        <button type="submit">Continue Shopping</button>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <p>Please be advised that changing your location while shopping will remove all contents from your Shopping Bag.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="d-inline-block text-dark">
                    <button type="submit" class="  bg-white border-0" onclick="location.href='Login'">
                        Login
                    </button>
                </li>
                <li class=" d-inline-block text-dark">
                    <button type="submit" class="  bg-white border-0">
                        <img src="public/templates/default/main/assets/images/icons/icon-shopping-bag.png" alt="">
                    </button>
                </li>
            </ul>
        </div>
    </div>
</header>