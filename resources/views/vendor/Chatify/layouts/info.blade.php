{{-- user info and avatar --}}
<div class="avatar av-l chatify-d-flex"></div>
<p class="info-name">{{ config('chatify.name') }}</p>
<div class="messenger-infoView-btns">
    <a href="#" class="danger delete-conversation">Xoá cuộc trò truyện</a>
    <button class="logout">Đăng xuất</button>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title"><span>Ảnh được chia sẻ</span></p>
    <div class="shared-photos-list"></div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
    @csrf
</form>
