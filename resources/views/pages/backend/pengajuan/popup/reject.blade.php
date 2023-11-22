<br>
<!-- Modal Tolak -->
{{-- <div class="modal fade" id="rejectpopup{{ $peminjaman->id }}" tabindex="-1" role="dialog"
    aria-labelledby="rejectpopup{{ $peminjaman->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectpopup{{ $peminjaman->id }}">Tolak
                    Pengajuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulir tolak dengan tambahan input untuk keterangan -->
                <form action="{{ route('pengajuan_labor_admin.reject', $peminjaman->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="keterangan_reject">Keterangan Tolak:</label>
                        <textarea class="form-control" name="keterangan_reject" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal fade" id="rejectpopup{{ $peminjaman->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Alasan Tolak</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('pengajuan_labor_admin.reject', $peminjaman->id) }}" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <br>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="wizard1">
                                        <section>
                                            <div class="control-group form-group">
                                                <label class="form-label"> Indikator </label>
                                                <input type="text" class="form-control required" id="keterangan_reject" name="keterangan_reject" placeholder="Keterangan">

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>
