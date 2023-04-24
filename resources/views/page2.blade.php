@extends('layout.master1')
@section('bot')
<link rel='stylesheet'
href='https://demo.mekshq.com/knowledge-guru/wp-content/themes/knowledge-guru/assets/css/main-style.css?ver=1.0.3'
type='text/css' media='all' />

<style>
    :root {
      --main-font: 'Inter', Arial, sans-serif;
      --main-font-weight: 400;
      --h-font: 'Open Sans', Arial, sans-serif;
      --h-font-weight: 600;
      --button-font: 'Inter', Arial, sans-serif;
      --button-font-weight: 700;
      --color-txt: #1D2B36;
      --color-bg: #F9F9F9;
      --color-main: #0084c2;
      --color-main-025: rgba(0, 132, 194, 0.25);
      --color-main-05: rgba(0, 132, 194, 0.5);
      --color-main-075: rgba(0, 132, 194, 0.75);
      --color-h: #1D2B36;
      --color-meta: rgba(29, 43, 54, 0.5);
      --color-header: hsl(196, 100%, 41%);
      --color-button-primary: #FECF27;
      --color-button-primary-text: #790000;
      --color-button-secondary: #0084c2;
      --color-button-tertiary: hsl(219, 60%, 95%);
      --color-txt-075: rgba(29, 43, 54, 0.75);
      --color-txt-05: rgba(29, 43, 54, 0.5);
      --color-txt-025: rgba(29, 43, 54, 0.25);
      --color-txt-015: rgba(29, 43, 54, 0.15);
      --color-txt-01: rgba(29, 43, 54, 0.1);
      --color-txt-005: rgba(29, 43, 54, 0.05);
      --color-txt-0025: rgba(29, 43, 54, 0.025);
      --color-header-middle-txt: #FFF;
      --color-header-middle-txt-05: rgba(255, 255, 255, 0.5);
      --color-header-middle-txt-075: rgba(255, 255, 255, 0.75);
      --color-header-middle-acc: var(--color-header-middle-txt-075);
      --font-size-p: 1.6rem;
      --line-height-p: 1.8;
      --font-size-small: 1.4rem;
      --line-height-small: 1.4;
      --font-size-nav: 1.4rem;
      --font-size-p-large: 1.8rem;
      --header-height: 90px;
      --header-sticky-height: 70px;
      --header-height-responsive-sm: 60px;
      --header-height-responsive-md: 80px;
      --width-full: 1102px;
      --content-post: 940px;
  }
  
  .widget-title {
      font-size: 2.0rem;
  }
  
  .entry-content .meks_ess_share_label {
      font-size: 1.4rem;
  }
  
  
  h1,
  .h1 {
      font-size: clamp(2.4rem, 3vw, 3.0rem);
  }
  
  h2,
  .h2 {
      font-size: clamp(2rem, 3vw, 2.4rem);
  }
  
  h3,
  .h3 {
      font-size: clamp(2rem, 2vw, 2.0rem);
  }
  
  h4,
  .h4,
  .mks_author_widget h3,
  .wp-block-cover:not(.wp-block-kbg-search-box):not(.wp-block-kbg-contact-box) .wp-block-cover-image-text,
  .wp-block-cover:not(.wp-block-kbg-search-box):not(.wp-block-kbg-contact-box) .wp-block-cover-text,
  .wp-block-cover:not(.wp-block-kbg-search-box):not(.wp-block-kbg-contact-box) h2,
  .wp-block-cover-image:not(.wp-block-kbg-search-box):not(.wp-block-kbg-contact-box) .wp-block-cover-image-text,
  .wp-block-cover-image:not(.wp-block-kbg-search-box):not(.wp-block-kbg-contact-box) .wp-block-cover-text,
  .wp-block-cover-image:not(.wp-block-kbg-search-box):not(.wp-block-kbg-contact-box) h2 {
      font-size: clamp(1.8rem, 3vw, 1.8rem);
  }
  
  h5,
  .h5,
  .header-el-label,
  .fn,
  .wp-block-kbg-accordion-item.col-lg-4 h4 {
      font-size: clamp(1.6rem, 3vw, 1.6rem);
  }
  
  h6,
  .h6 {
      font-size: clamp(1.4rem, 3vw, 1.4rem);
  }
  
  @media (min-width: 600px) {
  
      .header-mobile>.container,
      .header-sticky .header-middle>.container {
          height: 80px;
      }
  }
  
  .kbg-button,
  .wp-block-button .wp-block-button__link {
      font-family: var(--button-font);
      font-weight: var(--button-font-weight);
  }
  
  .kbg-button.disabled,
  .kbg-button.disabled:hover {
      background-color: rgba(29, 43, 54, 0.1);
      color: #1D2B36;
      pointer-events: none;
  }
  
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  .fn,
  .h7,
  .h8 {
      text-transform: none;
  }
  
  .kbg-button,
  .kbg-button-play span {
      text-transform: uppercase;
      letter-spacing: 0.5px;
  }
  
  .has-kbg-text-color {
      color: #1D2B36;
  }
  </style>
    <div class="kbg-section section-content mb--xxl">
        <nav aria-label="breadcrumb" style="background: none; margin-left: 400px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="help">Topics</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sample</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 kbg-order-3">
                    <aside class="kbg-sidebar row ">
                        <div id="kbg_category_widget-4" class="widget widget_categories col-12 col-md-6 col-lg-12">
                            <div class="widget-inside kbg-card">
                                <h4 class="widget-title"> <a href="help"> Help <a></h4>
                                <ul>
                                    <li><a href="button"><span class="category-text">Sample1</span><span
                                                class="count">1</span></a>
                                    </li>
                                    <li><a href="page2"><span class="category-text">Sample2</span><span
                                                class="count">2</span></a></li>
                                    <li><a href="button"><span class="category-text">Sample3</span><span
                                                class="count">3</span></a></li>
                                    <li><a href="page2"><span class="category-text">Sample4</span><span
                                                class="count">4</span></a>
                                    </li>
                                    <li><a href="button"><span class="category-text">Sample5</span><span
                                                class="count">5</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-12 kbg-order-1 kbg-content-height col-lg-8">
                    <div class="row kbg-load-items ">
                        <div class="col-12">
                            {{-- <div class="kbg-card kbg-card-p kbg-border-reset"> --}}
                            <div class="kbg-items">
                                <div class="item">
                                    <article
                                        class="kbg-post mb--xl section-item-vertical-rhythm kbg-tax-layout-a post-709 knowledge_base type-knowledge_base status-publish format-standard hentry kbg_category-getting-started kbg_category-live-chat">
                                        <div class="justify-content-center">
                                            <div class="entry-header d-flex">
                                                <div class="entry-header-inner">
                                                    <h2 class="entry-title mb--0 mt--0 h2 kbg-content-medium"><a
                                                            href="">Pages</a>
                                                    </h2>
                                                    <div class="entry-meta mt--xs">
                                                        <span class="meta-item meta-date"><span class="updated">July
                                                                7,
                                                                2021</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content mt--md">
                                                <p>Please note: This is a knowledge base article example created to help
                                                    you familiarize yourself with what KnowledgeGuru can offer.
                                                    KnowledgeGuru is packed with features We&#8217;ve carefully analyzed
                                                    the needs of the knowledge base website owners and...</p>
                                            </div>
                                            <a href="" class="kbg-button button-tertiary button-small mt--md2">
                                                Read more </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article
                                        class="kbg-post mb--xl section-item-vertical-rhythm kbg-tax-layout-a post-707 knowledge_base type-knowledge_base status-publish format-standard hentry kbg_category-getting-started kbg_category-live-chat">
                                        <div class="justify-content-center">
                                            <div class="entry-header d-flex">
                                                <div class="entry-header-inner">
                                                    <h2 class="entry-title mb--0 mt--0 h2 kbg-content-medium"><a
                                                            href="">Modules
                                                            setup</a></h2>
                                                    <div class="entry-meta mt--xs">
                                                        <span class="meta-item meta-date"><span class="updated">July
                                                                7, 2021</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content mt--md">
                                                <p>Please note: This is a knowledge base article example created to help
                                                    you familiarize yourself with what KnowledgeGuru can offer.
                                                    KnowledgeGuru is packed with features We&#8217;ve carefully analyzed
                                                    the needs of the knowledge base website owners and...</p>
                                            </div>
                                            <a href="" class="kbg-button button-tertiary button-small mt--md2">
                                                Read more </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article
                                        class="kbg-post mb--xl section-item-vertical-rhythm kbg-tax-layout-a post-705 knowledge_base type-knowledge_base status-publish format-standard hentry kbg_category-getting-started kbg_category-mobile_apps">
                                        <div class="justify-content-center">
                                            <div class="entry-header d-flex">
                                                <div class="entry-header-inner">
                                                    <h2 class="entry-title mb--0 mt--0 h2 kbg-content-medium"><a
                                                            href="">Post
                                                            layouts</a></h2>
                                                    <div class="entry-meta mt--xs">
                                                        <span class="meta-item meta-date"><span class="updated">July
                                                                7, 2021</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content mt--md">
                                                <p>Please note: This is a knowledge base article example created to help
                                                    you familiarize yourself with what KnowledgeGuru can offer.
                                                    KnowledgeGuru is packed with features We&#8217;ve carefully analyzed
                                                    the needs of the knowledge base website owners and...</p>
                                            </div>
                                            <a href="" class="kbg-button button-tertiary button-small mt--md2">
                                                Read more </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article
                                        class="kbg-post mb--xl section-item-vertical-rhythm kbg-tax-layout-a post-704 knowledge_base type-knowledge_base status-publish format-standard hentry kbg_category-getting-started kbg_category-productivity">
                                        <div class="justify-content-center">
                                            <div class="entry-header d-flex">
                                                <div class="entry-header-inner">
                                                    <h2 class="entry-title mb--0 mt--0 h2 kbg-content-medium"><a
                                                            href="">Menu
                                                            setup</a></h2>
                                                    <div class="entry-meta mt--xs">
                                                        <span class="meta-item meta-date"><span class="updated">July
                                                                7, 2021</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content mt--md">
                                                <p>Please note: This is a knowledge base article example created to help
                                                    you familiarize yourself with what KnowledgeGuru can offer.
                                                    KnowledgeGuru is packed with features We&#8217;ve carefully analyzed
                                                    the needs of the knowledge base website owners and...</p>
                                            </div>
                                            <a href="" class="kbg-button button-tertiary button-small mt--md2">
                                                Read more </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article
                                        class="kbg-post mb--xl section-item-vertical-rhythm kbg-tax-layout-a post-699 knowledge_base type-knowledge_base status-publish format-standard hentry kbg_category-getting-started">
                                        <div class="justify-content-center">
                                            <div class="entry-header d-flex">
                                                <div class="entry-header-inner">
                                                    <h2 class="entry-title mb--0 mt--0 h2 kbg-content-medium"><a
                                                            href="">Installation</a>
                                                    </h2>
                                                    <div class="entry-meta mt--xs">
                                                        <span class="meta-item meta-date"><span class="updated">July
                                                                7, 2021</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content mt--md">
                                                <p>Please note: This is a knowledge base article example created to help
                                                    you familiarize yourself with what KnowledgeGuru can offer.
                                                    KnowledgeGuru is packed with features We&#8217;ve carefully analyzed
                                                    the needs of the knowledge base website owners and...</p>
                                            </div>
                                            <a href="" class="kbg-button button-tertiary button-small mt--md2">
                                                Read more </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article
                                        class="kbg-post mb--xl section-item-vertical-rhythm kbg-tax-layout-a post-678 knowledge_base type-knowledge_base status-publish format-standard hentry kbg_category-getting-started">
                                        <div class="justify-content-center">
                                            <div class="entry-header d-flex">
                                                <div class="entry-header-inner">
                                                    <h2 class="entry-title mb--0 mt--0 h2 kbg-content-medium"><a
                                                            href="">Introduction</a>
                                                    </h2>
                                                    <div class="entry-meta mt--xs">
                                                        <span class="meta-item meta-date"><span class="updated">July
                                                                7, 2021</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content mt--md">
                                                <p>Please note: This is a knowledge base article example created to help
                                                    you familiarize yourself with what KnowledgeGuru can offer.
                                                    KnowledgeGuru is packed with features We&#8217;ve carefully analyzed
                                                    the needs of the knowledge base website owners and...</p>
                                            </div>
                                            <a href="https://demo.mekshq.com/knowledge-guru/knowledge-base/introduction/"
                                                class="kbg-button button-tertiary button-small mt--md2">
                                                Read more </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            {{-- </div> <!-- end kbg-card --> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light py-3 sticky-bottom">
        <div class="container pt-2">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2021 My Company. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#">Privacy Policy</a>
                    <span class="mx-2">|</span>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @extends('layout.master1')
@section('bot')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <nav aria-label="breadcrumb" style="background: none;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="help">Topics</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sample</li>
                    </ol>
                </nav>
                <div class="list-group list-group-flush">
                    <a href="help" class="list-group-item list-group-item-action border border-0 fw-bold">Help</a>
                    <a href="page2" class="list-group-item list-group-item-action bi bi-card-text border border-0">
                        Lorem ipsum dolor sit amet</a>
                    <a href="button" class="list-group-item list-group-item-action bi bi-card-text border border-0">
                        Ut enim ad minim veniam,</a>
                    <a href="page2" class="list-group-item list-group-item-action bi bi-card-text border border-0">
                        Sed ut perspiciatis unde omnis iste natus error sit</a>
                    <a href="button" class="list-group-item list-group-item-action bi bi-card-text border border-0">
                        Nemo enim ipsam voluptatem quia</a>
                    <a href="page2" class="list-group-item list-group-item-action bi bi-card-text border border-0">
                        Ut enim ad minima veniam, quis nostrum</a>
                    <a href="button" class="list-group-item list-group-item-action bi bi-card-text border border-0">
                        Quis autem vel eum iure reprehenderit</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="my-5 w-75">Sample</h1>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et
                    dolore magna aliqua.</p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-secondary fw-semibold" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">Loreeeeem</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-secondary fw-semibold" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Sampleeee</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-secondary fw-semibold" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">Dolorem</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-secondary fw-semibold" id="Duis-tab" data-bs-toggle="tab"
                            data-bs-target="#Duis-tab-pane" type="button" role="tab" aria-controls="Duis-tab-pane"
                            aria-selected="false">Duis</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-secondary fw-semibold" id="disabled-tab" data-bs-toggle="tab"
                            data-bs-target="#Luis-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane"
                            aria-selected="false">Luis</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-secondary fw-semibold" id="Ruis-tab" data-bs-toggle="tab"
                            data-bs-target="#Ruis-tab-pane" type="button" role="tab" aria-controls="Ruis-tab-pane"
                            aria-selected="false">Ruis</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-secondary fw-semibold" id="wuis-tab" data-bs-toggle="tab"
                            data-bs-target="#wuis-tab-pane" type="button" role="tab" aria-controls="wuis-tab-pane"
                            aria-selected="false">Wuis</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <h3 class="pt-3">Loreeem</h3>
                        <p>The Great Barrier Reef is one of the most famous natural wonders in the world. Located off the
                            coast of Australia, it is home to thousands of species of marine life. If you want to learn more
                            about this incredible place, check out <a
                                href="https://www.nationalgeographic.com/environment/2018/10/the-great-barrier-reef-a-catastrophe-laid-bare/">this
                                article</a> from National Geographic.</p>
                        <h2 class="pt-2">About My Favorite Book</h2>
                        <p>My favorite book is "To Kill a Mockingbird" by Harper Lee. It is a classic American novel that
                            explores themes of racism, injustice, and coming-of-age. I highly recommend it to anyone who is
                            interested in literature or social issues.</p>
                        <ul>
                            <li>The book is set in the fictional town of Maycomb, Alabama during the 1930s.</li>
                            <li>The main character, Scout Finch, is a young girl who learns about the world around her
                                through the trial of Tom Robinson, a black man accused of a crime he did not commit.</li>
                        </ul>
                        <h2>10 Benefits of Regular Exercise</h2>
                        <ul>
                            <li>Regular exercise helps to maintain a healthy weight.</li>
                            <li>It reduces the risk of chronic diseases such as heart disease, diabetes, and certain
                                cancers.</li>
                            <li>Exercise improves cardiovascular health by strengthening the heart and lungs.</li>
                            <li>It can boost energy levels and improve mood, reducing the risk of depression and anxiety.
                            </li>
                            <li>Strength training can help to build muscle and increase bone density, reducing the risk of
                                osteoporosis.</li>
                            <li>Exercise can improve cognitive function and reduce the risk of cognitive decline and
                                dementia.</li>
                            <li>It can improve sleep quality and reduce the risk of sleep disorders.</li>
                            <li>Exercise can increase flexibility, balance, and coordination, reducing the risk of falls and
                                injuries.</li>
                            <li>It can help to manage chronic pain and improve overall quality of life.</li>
                            <li>Regular exercise is associated with a longer life expectancy and better overall health
                                outcomes.</li>
                        </ul>


                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <h3 class="pt-3">Sampleee</h3>
                        <p>Welcome to my website!</p>
                        <p>Here, you'll find information about my interests and projects.</p>


                        <h2>8 Must-Visit National Parks in the United States</h2>
                        <ul>
                            <li><a href="https://www.nps.gov/yell/index.htm">Yellowstone National Park</a> is known for its
                                geysers, hot springs, and wildlife.</li>
                            <li><a href="https://www.nps.gov/grca/index.htm">Grand Canyon National Park</a> features
                                spectacular views of the canyon and the Colorado River.</li>
                            <li><a href="https://www.nps.gov/yose/index.htm">Yosemite National Park</a> is home to towering
                                waterfalls, granite cliffs, and ancient sequoias.</li>
                            <li><a href="https://www.nps.gov/acad/index.htm">Acadia National Park</a> boasts rugged
                                coastline, scenic vistas, and abundant wildlife.</li>
                            <li><a href="https://www.nps.gov/ever/index.htm">Everglades National Park</a> is a vast wetland
                                ecosystem that is home to a wide variety of plant and animal species.</li>
                            <li><a href="https://www.nps.gov/romo/index.htm">Rocky Mountain National Park</a> offers
                                stunning views of the Rockies and plenty of opportunities for outdoor recreation.</li>
                            <li><a href="https://www.nps.gov/zion/index.htm">Zion National Park</a> features towering
                                sandstone cliffs, winding canyons, and beautiful hiking trails.</li>
                            <li><a href="https://www.nps.gov/olym/index.htm">Olympic National Park</a> is a diverse
                                wilderness area that includes rugged coastline, ancient forests, and glacier-capped peaks.
                            </li>
                        </ul>

                        <h2>My Favorite Books</h2>
                        <ol>
                            <li>The Great Gatsby by F. Scott Fitzgerald</li>
                            <li>To Kill a Mockingbird by Harper Lee</li>
                            <li>1984 by George Orwell</li>
                            <li>Pride and Prejudice by Jane Austen</li>
                        </ol>

                        <h1>Welcome to my webpage!</h1>
                        <p>This is a paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam malesuada
                            libero a lorem malesuada, eu fringilla velit pellentesque. Nunc et lectus urna. Nulla facilisi.
                            Proin consectetur eget nisl non tempor. Vestibulum ac enim euismod, lobortis nulla eu, pharetra
                            eros. Sed eu felis ut mauris aliquam laoreet ut at nibh. In ac ligula sit amet metus dapibus
                            rutrum.</p>

                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <h3 class="pt-3">Dolorem</h3>
                        <p>This is a paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam malesuada
                            libero a lorem malesuada, eu fringilla velit pellentesque. Nunc et lectus urna. Nulla facilisi.
                            Proin consectetur eget nisl non tempor. Vestibulum ac enim euismod, lobortis nulla eu, pharetra
                            eros. Sed eu felis ut mauris aliquam laoreet ut at nibh. In ac ligula sit amet metus dapibus
                            rutrum.
                            <a href="https://www.example.com">Click here</a> to visit an example website.
                        </p>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Section 1
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        Content of section 1.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="pt-5">My List</h3>
                        <ul>
                            <li><a href="https://www.example.com">This is the first sentence.</a> Aliquam laoreet ut at nibh. In ac ligula sit amet metus dapib.</li>
                            <li><a href="https://www.example.com">This is the second sentence.</a> Proin consectetur eget nisl non tempor. Vestibulum ac enim euismod.</li>
                            <li><a href="https://www.example.com">This is the third sentence.</a> Regular exercise helps to maintain a healthy weight.</li>
                            <li><a href="https://www.example.com">This is the fourth sentence.</a> Vestibulum ac enim euismod, lobortis nulla eu</li>
                            <li><a href="https://www.example.com">This is the fifth sentence.</a> It can help to manage chronic pain and improve overall quality</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                        tabindex="0">Disabled</div>
                    <div class="tab-pane fade" id="Luis-tab-pane" role="tabpanel" aria-labelledby="Luis-tab"
                        tabindex="0">Luis</div>
                    <div class="tab-pane fade" id="Ruis-tab-pane" role="tabpanel" aria-labelledby="Ruis-tab"
                        tabindex="0">Ruis</div>
                    <div class="tab-pane fade" id="wuis-tab-pane" role="tabpanel" aria-labelledby="wuis-tab"
                        tabindex="0">Wuis</div>
                </div>
            </div>
        </div>
    </div>

    <section id="faq" class="section pb-5" style="padding-left: 20%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-12">
                    <div class="card sticky-element">
                        <ul class="list-group list-group-flush">
                            <h4 class="text-heading m-3">Quick Navigation</h4>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                aria-current="true">
                                License
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Pricing & Support
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Purchasing Online
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Returns
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-5 pt-3">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <h2 class="text-heading section-heading m-3">Frequently Asked Questions</h2>
                                <p class="m-3">FAQ is suppose to be an online document that poses a series of common
                                    questions and answers on a specific topic.
                                </p>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is your refund policy and terms and conditions?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We comply fully with KB’s refund policy. We issue refunds for the reasons KB
                                    permits us to give refund and we don’t issue refunds on the cases KB does not
                                    guarantee refunds. Please check KB’s refund policy:
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How many shortcodes/blocks/elements are there in Rogan?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are over 200 shortcodes/blocks/elements in Rogan WordPress Theme. You can use
                                    any block/element into any page as you want.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is Rogan Gutenberg compatible and latest WordPress supported?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, SaasLand is compatible with Gutenberg.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How many websites can I use Rogan in with a regular license?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    According to KB’s licensing, you can use SaasLand or any other theme on only one
                                    website. If you want to use it on multiple websites, you must buy multiple licenses.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-light py-3 sticky-bottom">
        <div class="container pt-2">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2021 My Company. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#">Privacy Policy</a>
                    <span class="mx-2">|</span>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
@endsection --}}