<article @php(post_class('row'))>
        <div class="col-12 col-lg-6 col-xl-6 no-padding thumnail-search">
            <a href="@php(the_permalink())">
                @if (has_post_thumbnail())
                    {{ the_post_thumbnail('medium') }}
                @else
                    <img src="{!! \App\App::get_default_image_article_thumbnail() !!}">
                @endif
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-6 entry">
            <h4></h4>
            <h2 class="entry-title">
                <a href="{{ get_permalink() }}">
                    @if(get_post_type() == 'page')
                        Page :
                    @elseif(get_post_type() == 'post')
                        Article :
                    @elseif(get_post_type() == 'job_listing')
                        Offre entreprise :
                    @elseif(get_post_type() == 'project')
                        Projet :
                    @endif
                    {{ get_the_title() }}
                </a>
            </h2>
            <div class="entry-summary">
                @php(the_excerpt())
            </div>
        </div>
</article>
