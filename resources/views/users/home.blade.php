@extends('users.layouts.template')

@section('content')
    <!-- home -->
    <section class="home home--hero">
        <div class="container">
            <div class="row">
                <!-- hero carousel -->
                <div class="col-12">
                    <div class="hero splide splide--hero">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev" type="button">
                                <i class="ti ti-chevron-left"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next" type="button">
                                <i class="ti ti-chevron-right"></i>
                            </button>
                        </div>

                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="hero__slide"
                                        data-bg="{{ asset('') }}assets_users/img/bg/slide__bg-1.jpg">
                                        <div class="hero__content">
                                            <h2 class="hero__title">Savage Beauty <sub class="green">9.8</sub></h2>
                                            <p class="hero__text">A brilliant scientist discovers a way to harness the
                                                power of the ocean's currents to create a new, renewable energy source.
                                                But when her groundbreaking technology falls into the wrong hands, she
                                                must race against time to stop it from being used for evil.</p>
                                            <p class="hero__category">
                                                <a href="#">Action</a>
                                                <a href="#">Drama</a>
                                                <a href="#">Comedy</a>
                                            </p>
                                            <div class="hero__actions">
                                                <a href="details.html" class="hero__btn">
                                                    <span>Watch now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="hero__slide"
                                        data-bg="{{ asset('') }}assets_users/img/bg/slide__bg-2.jpg">
                                        <div class="hero__content">
                                            <h2 class="hero__title">From the Other Side <sub class="yellow">6.9</sub>
                                            </h2>
                                            <p class="hero__text">In a world where magic is outlawed and hunted, a
                                                young witch must use her powers to fight back against the corrupt
                                                authorities who seek to destroy her kind.</p>
                                            <p class="hero__category">
                                                <a href="#">Adventure</a>
                                                <a href="#">Triler</a>
                                            </p>
                                            <div class="hero__actions">
                                                <a href="details.html" class="hero__btn">
                                                    <span>Watch now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="hero__slide"
                                        data-bg="{{ asset('') }}assets_users/img/bg/slide__bg-3.jpg">
                                        <div class="hero__content">
                                            <h2 class="hero__title">Endless Horizon <sub class="red">6.2</sub></h2>
                                            <p class="hero__text">When a renowned archaeologist goes missing, his
                                                daughter sets out on a perilous journey to the heart of the Amazon
                                                rainforest to find him. Along the way, she discovers a hidden city and a
                                                dangerous conspiracy that threatens the very balance of power in the
                                                world.</p>
                                            <p class="hero__category">
                                                <a href="#">Action</a>
                                                <a href="#">Drama</a>
                                                <a href="#">Triler</a>
                                            </p>
                                            <div class="hero__actions">
                                                <a href="details.html" class="hero__btn">
                                                    <span>Watch now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- hero carousel -->
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- fixed filter wrap -->
    <div>
        <!-- filter (fixed position) -->
        <div class="filter filter--fixed">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="filter__content">
                            <!-- menu btn -->
                            <button class="filter__menu" type="button"><i class="ti ti-filter"></i>Filter</button>
                            <!-- end menu btn -->

                            <!-- filter desk -->
                            <div class="filter__items">
                                <select class="filter__select" name="genre" id="filter__genre">
                                    <option value="0">All genres</option>
                                    <option value="1">Action/Adventure</option>
                                    <option value="2">Animals</option>
                                    <option value="3">Animation</option>
                                    <option value="4">Biography</option>
                                    <option value="5">Comedy</option>
                                    <option value="6">Cooking</option>
                                    <option value="7">Dance</option>
                                    <option value="8">Documentary</option>
                                    <option value="9">Drama</option>
                                    <option value="10">Education</option>
                                    <option value="11">Entertainment</option>
                                    <option value="12">Family</option>
                                    <option value="13">Fantasy</option>
                                    <option value="14">History</option>
                                    <option value="15">Horror</option>
                                    <option value="16">Independent</option>
                                    <option value="17">International</option>
                                    <option value="18">Kids</option>
                                    <option value="19">Medical</option>
                                    <option value="20">Military/War</option>
                                    <option value="21">Music</option>
                                    <option value="22">Mystery/Crime</option>
                                    <option value="23">Nature</option>
                                    <option value="24">Paranormal</option>
                                    <option value="25">Politics</option>
                                    <option value="26">Racing</option>
                                    <option value="27">Romance</option>
                                    <option value="28">Sci-Fi/Horror</option>
                                    <option value="29">Science</option>
                                    <option value="30">Science Fiction</option>
                                    <option value="31">Science/Nature</option>
                                    <option value="32">Spanish</option>
                                    <option value="33">Travel</option>
                                    <option value="34">Western</option>
                                </select>

                                <select class="filter__select" name="quality" id="filter__quality">
                                    <option value="0">Any quality</option>
                                    <option value="1">HD 1080</option>
                                    <option value="2">HD 720</option>
                                    <option value="3">DVD</option>
                                    <option value="4">TS</option>
                                </select>

                                <select class="filter__select" name="rate" id="filter__rate">
                                    <option value="0">Any rating</option>
                                    <option value="1">from 3.0</option>
                                    <option value="2">from 5.0</option>
                                    <option value="3">from 7.0</option>
                                    <option value="4">Golder Star</option>
                                </select>

                                <select class="filter__select" name="sort" id="filter__sort">
                                    <option value="0">Relevance</option>
                                    <option value="1">Newest</option>
                                    <option value="2">Oldest</option>
                                </select>
                            </div>
                            <!-- end filter desk -->

                            <!-- filter btn -->
                            <button class="filter__btn" type="button">Apply</button>
                            <!-- end filter btn -->

                            <!-- amount -->
                            <span class="filter__amount">Showing 18 of 1713</span>
                            <!-- end amount -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter (fixed position) -->

        <!-- catalog -->
        <div class="section section--catalog">
            <div class="container">
                <div class="row">
                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover2.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover3.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">6.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover4.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover5.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover6.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover7.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover8.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.5</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover9.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.7</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover10.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.6</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover11.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">9.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover12.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover13.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover14.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover15.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">5.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover16.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover17.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="{{ asset('') }}assets_users/img/covers/cover18.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                </div>

                <div class="row">
                    <!-- more -->
                    <div class="col-12">
                        <button class="section__more" type="button">Load more</button>
                    </div>
                    <!-- end more -->
                </div>
            </div>
        </div>
        <!-- end catalog -->
    </div>
    <!-- end fixed filter wrap -->

    <!-- section -->
    <section class="section section--border">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <div class="section__title-wrap">
                        <h2 class="section__title">Expected premiere</h2>
                        <a href="catalog.html" class="section__view section__view--carousel">View All</a>
                    </div>
                </div>
                <!-- end section title -->

                <!-- carousel -->
                <div class="col-12">
                    <div class="section__carousel splide splide--content">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev" type="button">
                                <i class="ti ti-chevron-left"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next" type="button">
                                <i class="ti ti-chevron-right"></i>
                            </button>
                        </div>

                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">8.4</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">I Dream in Another
                                                    Language</a></h3>
                                            <span class="item__category">
                                                <a href="#">Action</a>
                                                <a href="#">Triler</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover2.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                            <span class="item__category">
                                                <a href="#">Comedy</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover3.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--red">6.3</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                            <span class="item__category">
                                                <a href="#">Romance</a>
                                                <a href="#">Drama</a>
                                                <a href="#">Music</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover4.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--yellow">6.9</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                            <span class="item__category">
                                                <a href="#">Comedy</a>
                                                <a href="#">Drama</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover5.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">8.4</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">I Dream in Another
                                                    Language</a></h3>
                                            <span class="item__category">
                                                <a href="#">Action</a>
                                                <a href="#">Triler</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover6.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                            <span class="item__category">
                                                <a href="#">Comedy</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover7.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">7.1</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                            <span class="item__category">
                                                <a href="#">Comedy</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover8.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--red">5.5</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">I Dream in Another
                                                    Language</a></h3>
                                            <span class="item__category">
                                                <a href="#">Action</a>
                                                <a href="#">Triler</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover9.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--yellow">6.7</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                            <span class="item__category">
                                                <a href="#">Comedy</a>
                                                <a href="#">Drama</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover10.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--red">5.6</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                            <span class="item__category">
                                                <a href="#">Romance</a>
                                                <a href="#">Drama</a>
                                                <a href="#">Music</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover11.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">9.2</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                            <span class="item__category">
                                                <a href="#">Comedy</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li class="splide__slide">
                                    <div class="item item--carousel">
                                        <div class="item__cover">
                                            <img src="{{ asset('') }}assets_users/img/covers/cover12.jpg"
                                                alt="">
                                            <a href="details.html" class="item__play">
                                                <i class="ti ti-player-play-filled"></i>
                                            </a>
                                            <span class="item__rate item__rate--green">8.4</span>
                                            <button class="item__favorite" type="button"><i
                                                    class="ti ti-bookmark"></i></button>
                                        </div>
                                        <div class="item__content">
                                            <h3 class="item__title"><a href="details.html">I Dream in Another
                                                    Language</a></h3>
                                            <span class="item__category">
                                                <a href="#">Action</a>
                                                <a href="#">Triler</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end carousel -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section -->
    <section class="section section--border">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section__title">Select your plan</h2>
                </div>
            </div>

            <div class="row">
                <!-- plan -->
                <div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
                    <div class="plan">
                        <h3 class="plan__title">Basic</h3>
                        <span class="plan__price">Free</span>
                        <ul class="plan__list">
                            <li class="plan__item"><i class="ti ti-circle-check"></i> 7 days</li>
                            <li class="plan__item"><i class="ti ti-circle-check"></i> 720p Resolution</li>
                            <li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Limited
                                Availability</li>
                            <li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Desktop Only
                            </li>
                            <li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Limited Support
                            </li>
                        </ul>
                        <a href="signin.html" class="plan__btn">Register</a>
                    </div>
                </div>
                <!-- end plan -->

                <!-- plan -->
                <div class="col-12 col-md-12 col-lg-4 order-md-1 order-lg-2">
                    <div class="plan plan--orange">
                        <h3 class="plan__title">Premium</h3>
                        <span class="plan__price">$34.99 <sub>/ month</sub></span>
                        <ul class="plan__list">
                            <li class="plan__item"><i class="ti ti-circle-check"></i> 1 Month</li>
                            <li class="plan__item"><i class="ti ti-circle-check"></i> Full HD</li>
                            <li class="plan__item"><i class="ti ti-circle-check"></i> Limited Availability</li>
                            <li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> TV & Desktop
                            </li>
                            <li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> 24/7 Support
                            </li>
                        </ul>
                        <button class="plan__btn" type="button" data-bs-toggle="modal"
                            data-bs-target="#plan-modal">Choose Plan</button>
                    </div>
                </div>
                <!-- end plan -->

                <!-- plan -->
                <div class="col-12 col-md-6 col-lg-4 order-md-3">
                    <div class="plan plan--red">
                        <h3 class="plan__title">Cinematic</h3>
                        <span class="plan__price">$49.99 <sub>/ month</sub></span>
                        <ul class="plan__list">
                            <li class="plan__item"><i class="ti ti-circle-check"></i> 2 Months</li>
                            <li class="plan__item"><i class="ti ti-circle-check"></i> Ultra HD</li>
                            <li class="plan__item"><i class="ti ti-circle-check"></i> Limited Availability</li>
                            <li class="plan__item"><i class="ti ti-circle-check"></i> Any Device</li>
                            <li class="plan__item"><i class="ti ti-circle-check"></i> 24/7 Support</li>
                        </ul>
                        <button class="plan__btn" type="button" data-bs-toggle="modal"
                            data-bs-target="#plan-modal">Choose Plan</button>
                    </div>
                </div>
                <!-- end plan -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer__content">
                        <a href="index.html" class="footer__logo">
                            <img src="{{ asset('') }}assets_users/img/logo.svg" alt="">
                        </a>

                        <span class="footer__copyright">© HOTFLIX, 2019—2024 <br> Create by <a
                                href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry
                                Volkov</a></span>

                        <nav class="footer__nav">
                            <a href="about.html">About Us</a>
                            <a href="contacts.html">Contacts</a>
                            <a href="privacy.html">Privacy policy</a>
                        </nav>

                        <button class="footer__back" type="button">
                            <i class="ti ti-arrow-narrow-up"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- mobile filter -->
    <div class="mfilter">
        <div class="mfilter__head">
            <h6 class="mfilter__title">Filter</h6>

            <button class="mfilter__close" type="button"><i class="ti ti-x"></i></button>
        </div>

        <div class="mfilter__select-wrap">
            <div class="sign__group">
                <select class="filter__select" name="mgenre" id="mfilter__genre">
                    <option value="0">All genres</option>
                    <option value="1">Action/Adventure</option>
                    <option value="2">Animals</option>
                    <option value="3">Animation</option>
                    <option value="4">Biography</option>
                    <option value="5">Comedy</option>
                    <option value="6">Cooking</option>
                    <option value="7">Dance</option>
                    <option value="8">Documentary</option>
                    <option value="9">Drama</option>
                    <option value="10">Education</option>
                    <option value="11">Entertainment</option>
                    <option value="12">Family</option>
                    <option value="13">Fantasy</option>
                    <option value="14">History</option>
                    <option value="15">Horror</option>
                    <option value="16">Independent</option>
                    <option value="17">International</option>
                    <option value="18">Kids</option>
                    <option value="19">Medical</option>
                    <option value="20">Military/War</option>
                    <option value="21">Music</option>
                    <option value="22">Mystery/Crime</option>
                    <option value="23">Nature</option>
                    <option value="24">Paranormal</option>
                    <option value="25">Politics</option>
                    <option value="26">Racing</option>
                    <option value="27">Romance</option>
                    <option value="28">Sci-Fi/Horror</option>
                    <option value="29">Science</option>
                    <option value="30">Science Fiction</option>
                    <option value="31">Science/Nature</option>
                    <option value="32">Spanish</option>
                    <option value="33">Travel</option>
                    <option value="34">Western</option>
                </select>
            </div>

            <div class="sign__group">
                <select class="filter__select" name="mquality" id="mfilter__quality">
                    <option value="0">Any quality</option>
                    <option value="1">HD 1080</option>
                    <option value="2">HD 720</option>
                    <option value="3">DVD</option>
                    <option value="4">TS</option>
                </select>
            </div>

            <div class="sign__group">
                <select class="filter__select" name="mrate" id="mfilter__rate">
                    <option value="0">Any rating</option>
                    <option value="1">from 3.0</option>
                    <option value="2">from 5.0</option>
                    <option value="3">from 7.0</option>
                    <option value="4">Golder Star</option>
                </select>
            </div>

            <div class="sign__group">
                <select class="filter__select" name="msort" id="mfilter__sort">
                    <option value="0">Relevance</option>
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                </select>
            </div>
        </div>

        <button class="mfilter__apply" type="button">Apply</button>
    </div>
    <!-- end mobile filter -->

    <!-- plan modal -->
    <div class="modal fade" id="plan-modal" tabindex="-1" aria-labelledby="plan-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal__content">
                    <button class="modal__close" type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti ti-x"></i></button>

                    <form action="#" class="modal__form">
                        <h4 class="modal__title">Select plan</h4>

                        <div class="sign__group">
                            <label for="fullname" class="sign__label">Name</label>
                            <input id="fullname" type="text" name="name" class="sign__input"
                                placeholder="Full name">
                        </div>

                        <div class="sign__group">
                            <label for="email" class="sign__label">Email</label>
                            <input id="email" type="text" name="email" class="sign__input"
                                placeholder="example@domain.com">
                        </div>

                        <div class="sign__group">
                            <label class="sign__label" for="value">Choose plan:</label>
                            <select class="sign__select" name="value" id="value">
                                <option value="35">Premium - $34.99</option>
                                <option value="50">Cinematic - $49.99</option>
                            </select>

                            <span class="sign__text">You can spend money from your account on the renewal of the
                                connected packages, or to order cars on our website.</span>
                        </div>

                        <div class="sign__group">
                            <label class="sign__label">Payment method:</label>

                            <ul class="sign__radio">
                                <li>
                                    <input id="type1" type="radio" name="type" checked="">
                                    <label for="type1">Visa</label>
                                </li>
                                <li>
                                    <input id="type2" type="radio" name="type">
                                    <label for="type2">Mastercard</label>
                                </li>
                                <li>
                                    <input id="type3" type="radio" name="type">
                                    <label for="type3">Paypal</label>
                                </li>
                            </ul>
                        </div>

                        <button type="button" class="sign__btn sign__btn--modal">
                            <span>Proceed</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end plan modal -->
@endsection
