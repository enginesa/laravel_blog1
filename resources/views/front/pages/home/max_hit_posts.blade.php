<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">

            @foreach($postsMaxHit as $post)
                @php $slotName="second"; @endphp

                @if ($loop->first)@php $slotName="first"; @endphp @endif
                @if ($loop->last)@php $slotName="last"; @endphp @endif

                <div class="{{$slotName}}-slot">
                    <div class="masonry-box post-media">
                        <img src="{{asset("public")}}/upload/tech_01.jpg" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html" title="">{{$post->getCategory->name}}</a></span>
                                    <h4><a href="tech-single.html" title="">{{$post->title}}</a></h4>
                                    <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end first-side -->
            @endforeach


        </div><!-- end masonry -->
    </div>
</section>