<x-layout>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    @error('password')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex flex-column gap-2">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <!-- Register 버튼 추가 -->
                    <div class="mt-3 text-center">
                        <span>Don't have an account?</span>
                        <a href="{{ route('register') }}" class="btn btn-success w-100 mt-2">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
