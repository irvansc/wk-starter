@extends('back.layouts.pages-layouts')

@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Users')
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            @livewire('back.konfigurasi.konfigurasi-users')
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script src="/back/dist/vendor/sweetalert2/sweetalert2.all.min.js"></script>

<script>
    $(window).on('hidden.bs.modal',function(){
        Livewire.emit('resetForms');
    });

    window.addEventListener('hide_add_user_modal', function(event){
        $('#add_user_modal').modal('hide');
    })

    window.addEventListener('showEditUserModal',function(event){
        $('#edit_user_modal').modal('show')
    })
    window.addEventListener('hide_edit_user_modal', function(event){
        $('#edit_user_modal').modal('hide');
    })
    window.addEventListener('deleteUser', function(event){
        swal.fire({
            title:event.detail.title,
            html:event.detail.html,
            showCloseButton:true,
            showCancelButton:true,
            cancelButtonText:'Cancel',
            confirmButtonText:'Yes, delete',
            cancelButtonColor:'#d33',
            confirmButtonColor:'#3085d6',
            allowOutsideClick:false,
        }).then(function(result){
            if (result.value) {
                Livewire.emit('deleteUserAction', event.detail.id)
            }
        })
    })
</script>
@endpush




