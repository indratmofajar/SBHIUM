 <div class="">
	<!-- <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>
    </div> -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Profile Investor <small>Detail profile</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

              <div class="profile_img">

                <!-- end of image cropping -->
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" src="<?= Yii::app()->theme->baseUrl ?>/images/user1.png" alt="Avatar" title="Change the avatar">

                  <!-- Cropping modal -->
                  <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                          <div class="modal-header">
                            <button class="close" data-dismiss="modal" type="button">&times;</button>
                            <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                          </div>
                          <div class="modal-body">
                            <div class="avatar-body">

                              <!-- Upload image and data -->
                              <div class="avatar-upload">
                                <input class="avatar-src" name="avatar_src" type="hidden">
                                <input class="avatar-data" name="avatar_data" type="hidden">
                                <label for="avatarInput">Local upload</label>
                                <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                              </div>

                              <!-- Crop and preview -->
                              <div class="row">
                                <div class="col-md-9">
                                  <div class="avatar-wrapper"></div>
                                </div>
                                <div class="col-md-3">
                                  <div class="avatar-preview preview-lg"></div>
                                  <div class="avatar-preview preview-md"></div>
                                  <div class="avatar-preview preview-sm"></div>
                                </div>
                              </div>

                              <div class="row avatar-btns">
                                <div class="col-md-9">
                                  <div class="btn-group">
                                    <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                    <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                    <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                    <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                  </div>
                                  <div class="btn-group">
                                    <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                    <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                    <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                    <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="modal-footer">
                                            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                          </div> -->
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- /.modal -->

                  <!-- Loading state -->
                  <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                </div>
                <!-- end of image cropping -->

              </div>
              <h3><?= $data->Fullname;?></h3>

              <ul class="list-unstyled user_data">
                <li><i class="fa fa-map-marker user-profile-icon"></i> <?= $data->City;?>
                </li>

                <li>
                  <i class="fa fa-phone user-profile-icon"></i> <?= $data->Phone;?>
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-envelope-o user-profile-icon"></i> <?= $data->email;?>
                </li>
              </ul>

              <a class="btn btn-success" href="<?= $this->createUrl('/admin/users/edit/i/'.Yii::app()->user->getState('userid').'/referrer/profile') ?>"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
              <br />
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">

              <div class="profile_title">
                <div class="col-md-12 hidden-small">
                  <h2 class="line_30">Detail Investasi</h2>

                  <table class="countries_list">
                    <tbody>
                      <tr>
                        <td>Jumlah Slot</td>
                        <td class="fs15 fw700">
                          <table id="data" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>Slot Akhir</th>
                                <th>Tanggal Input</th>
                                <th>Tanggal Active</th>
                                <!-- <th>Keterangan</th> -->
                              </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1;?>
                                <?php foreach ((array)$dataSlot as $valdataSlot):?>
                              <tr>
                                <td><?= $number++;?></td>
                                <td><?= $valdataSlot->debit ?></td>
                                <td><?= $valdataSlot->kredit ?></td>
                                <td><?= $valdataSlot->slot_akhir ?></td>
                                <td><?= date("d/m/Y", strtotime($valdataSlot->input_date)) ?></td>
                                <td><?= date("d/m/Y", strtotime($valdataSlot->active_date)) ?></td>
                                <!-- <td><?= $valdataSlot->keterangan ?></td> -->
                              </tr>
                                <?php endforeach;?>
                            </tbody>
                          </table>
                        </td>

                      </tr>
                      <tr>
                        <td>Nominal per slot</td>
                        <td class="fs15 fw700 text-right"><?= 'Rp. '.number_format(500000,0,'.',',') ?></td>
                      </tr>
                      <tr>
                        <td>Total Investasi (<?= (!empty($dataSlotAkhir->slot_akhir)?$dataSlotAkhir->slot_akhir:0) ?> * <?= 'Rp. '.number_format(500000,0,'.',',') ?>)</td>
                        <td class="fs15 fw700 text-right"><?= 'Rp. '.number_format((!empty($dataSlotAkhir->slot_akhir)?$dataSlotAkhir->slot_akhir:0) * 500000,0,'.',',') ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>