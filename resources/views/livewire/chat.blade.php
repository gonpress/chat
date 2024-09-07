<div class="d-flex gap-3" style="height: calc(100vh - 100px); overflow: hidden;">
    <!-- 사용자 목록 -->
    <div class="d-flex flex-column" style="width: 300px;">
        <div class="list-group" style="overflow-y: auto; flex-grow: 1;">
            <h5>사용자 목록</h5>
            @foreach ($users as $user)
                <button type="button" wire:click="selectUser({{ $user->id }})"
                    class="list-group-item list-group-item-action">
                    {{ $user->name }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- 채팅 방 -->
    <div class="flex-fill d-flex flex-column" style="overflow: hidden;">
        @if ($selectedUser)
            <div class="d-flex flex-column gap-3 flex-grow-1" style="overflow: hidden;">
                <h5>{{ $selectedUser->name }}님과의 채팅</h5>

                <!-- 채팅 메시지 칸 -->
                <div class="card p-3 flex-grow-1" style="overflow-y: auto;">
                    <div class="card-body">
                        <div class='d-flex flex-column gap-3'>
                            @for ($i = 0; $i < 9; $i++)
                                <div class="card p-3">
                                    <div class="card-title">
                                        2024-09-07 12:34:56
                                    </div>
                                    <div class='card-body'>
                                        메시지 {{ $i + 1 }}
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- 메시지 입력창 -->
                <form wire:submit.prevent="sendMessage" style="display: flex; gap: 10px; margin-top: 10px;">
                    <input type="text" wire:model="message" class="form-control" placeholder="메시지를 입력해주세요."
                        style="flex-grow: 1;">
                    <button type="submit" class="btn btn-primary">전송</button>
                </form>
            </div>
        @else
            <p> 사용자를 선택하시면 1:1 대화가 가능합니다.</p>
        @endif
    </div>
</div>
