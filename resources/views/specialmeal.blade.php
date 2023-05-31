 <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach ($data3 as $d)
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                           <div> <img src="/SpecialFoodImages/{{$d->image}}" alt=""></div>
                                                            <div class="col-8">
                                                                <h4>{{$d->title}}</h4>
                                                                <p>{{$d->description}}</p>
                                                            </div>
                                                            <div class="price col">
                                                                <h6>{{$d->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <div class="col-lg-6" style="position: relative;left:100px">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach ($data3 as $d)
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                           <div> <img src="/SpecialFoodImages/{{$d->image}}" alt=""></div>
                                                            <div class="col-8">
                                                                <h4>{{$d->title}}</h4>
                                                                <p>{{$d->description}}</p>
                                                            </div>
                                                            <div class="price">
                                                                <h6>{{$d->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach ($data4 as $d)
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                           <div> <img src="/SpecialFoodImages/{{$d->image}}" alt=""></div>
                                                            <div class="col-8">
                                                                <h4>{{$d->title}}</h4>
                                                                <p>{{$d->description}}</p>
                                                            </div>
                                                            <div class="price">
                                                                <h6>{{$d->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" style="position: relative;left:100px">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach ($data4 as $d)
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                           <div> <img src="/SpecialFoodImages/{{$d->image}}" alt=""></div>
                                                            <div class="col-8">
                                                                <h4>{{$d->title}}</h4>
                                                                <p>{{$d->description}}</p>
                                                            </div>
                                                            <div class="price">
                                                                <h6>{{$d->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach ($data5 as $d)
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                           <div> <img src="/SpecialFoodImages/{{$d->image}}" alt=""></div>
                                                            <div class="col-8">
                                                                <h4>{{$d->title}}</h4>
                                                                <p>{{$d->description}}</p>
                                                            </div>
                                                            <div class="price">
                                                                <h6>{{$d->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" style="position: relative;left:100px">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach ($data5 as $d)
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                           <div> <img src="/SpecialFoodImages/{{$d->image}}" alt=""></div>
                                                            <div class="col-8">
                                                                <h4>{{$d->title}}</h4>
                                                                <p>{{$d->description}}</p>
                                                            </div>
                                                            <div class="price">
                                                                <h6>{{$d->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>