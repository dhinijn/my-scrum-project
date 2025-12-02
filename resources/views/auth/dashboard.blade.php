<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" style="background:red; color:white; padding:8px 14px; border:none; border-radius:5px;">
        Logout
    </button>
</form>
