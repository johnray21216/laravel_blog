@if($paginator->hasPages())
    <div class="paginate">
            @if($paginator->onFirstPage())
                  <a href="#" class="paginate-prev is-disable">
                      <span class="paginate-prev-arrow"></span>
                  </a>
             @else
                 <a href="{{$paginator->previousPageUrl()}}" class="paginate-prev">
                     <span class="paginate-prev-arrow"></span>
                 </a>
             @endif
             @foreach($elements as $element)
                @if (is_string($element))
                  <a href="#" class="paginate-number is-current">{{$element}}</a>
                @endif
                @if(is_array($element))
                  @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <a href="#" class="paginate-number is-current">{{$page}}</a>
                    @else
                        <a href="{{$url}}" class="paginate-number">{{$page}}</a>
                    @endif
                  @endforeach
                @endif
             @endforeach
             @if($paginator->hasMorePages())
                 <a href="{{$paginator->nextPageUrl()}}" class="paginate-next">
                     <span class="paginate-next-arrow"></span>
                  </a>
             @else
                 <a href="#" class="paginate-next is-disable">
                     <span class="paginate-next-arrow"></span>
                  </a>
             @endif


          </div>
    @endif
