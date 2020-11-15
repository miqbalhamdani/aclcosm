<div class="shop-sidebar__section -categories">
  <div class="section-title -style1 -medium" style="margin-bottom:1.875em">
    <h2>Categories</h2>
    <img src="{{ URL('fe/images/introduction/IntroductionOne/content-deco.png') }}" alt="Decoration"/>
  </div>

  <ul>
    @foreach ($categories as $item)
      @if (!$item->parent_id)
        <li>
          <a href="#">
            {{ $item->name }}
          </a>
        </li>

        @foreach ($item->child as $subItem)
          <li class="pl-3">
            <a href="#">
              {{ $subItem->name }}
            </a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
