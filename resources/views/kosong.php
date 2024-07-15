<div class="col-lg-4 col-md-6 col-sm-12 menu-item">
                                            <!-- MENU THUMB -->
                                            <div class="menu-thumb">
                                                <a href="#" class="image-popup" data-toggle="modal"
                                                    data-target="#menuModal{{ $index }}">
                                                    <img src="{{ asset('images/' . $item->gambar) }}"
                                                        class="img-responsive menu-image" alt="{{ $item->nama }}">
                                                    <div class="menu-info">
                                                        <div class="menu-item">
                                                            <h3>{{ $item->nama }}</h3>
                                                            <p>{{ $item->deskripsi }}</p>
                                                        </div>
                                                        <div class="menu-price">
                                                            <span>Rp
                                                                {{ number_format($item->harga, 0, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="menuModal{{ $index }}" tabindex="-1"
                                            role="dialog" aria-labelledby="menuModalLabel{{ $index }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="menuModalLabel{{ $index }}">
                                                            {{ $item->nama }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{ $item->deskripsi }}</p>
                                                        <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
