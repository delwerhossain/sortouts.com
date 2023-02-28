<div>
    @if(session()->has('message'))
    <div style="padding: 4px; background-color: springgreen; color: black; font-weight: 600;">
        {{session()->get('message')}}
    </div>
    @endif
</div>