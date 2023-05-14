<x-app-layout>
    <x-breadcrumb name="province" />
    <x-card-container>
        <div class="text-end mb-4">
            <x-link-button route="{{ route('admin.province.create') }}" color="gray" type="button">
                Tambah
            </x-link-button>
        </div>
        <table id="provinceTable" class="w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </x-card-container>

    @push('js-internal')
        <script>
            function btnDelete(id, name) {
                let url = "{{ route('admin.province.destroy', ':id') }}";
                url = url.replace(':id', id);

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: `Provinsi ${name} akan dihapus`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Tidak',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            method: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: response.message
                                    }).then(() => {
                                        $('#provinceTable').DataTable().ajax.reload();
                                    })
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal',
                                        text: response.message
                                    })
                                }
                            }
                        });
                    }
                });
            }

            $(function() {
                $('#provinceTable').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    autoWidth: false,
                    ajax: "{{ route('admin.province.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            });

            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}'
                })
            @endif

            @if (Session::has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ Session::get('error') }}'
                })
            @endif
        </script>
    @endpush
</x-app-layout>
