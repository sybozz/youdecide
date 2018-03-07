@extends('manager.master')

@section('mainContent')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pending proposals</h2>
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

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">SL no. </th>
                            <th class="column-title">Proposal id </th>
                            <th class="column-title">Date </th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Action </th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr class="even pointer">
                            <td class=" ">1</td>
                            <td class=" ">121000210 </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td class=" ">Pending</td>
                            <td class=" last">
                                <a href="#"><i class="fa fa-check"></i></a>
                                |
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr class="even pointer">
                            <td class=" ">2</td>
                            <td class=" ">121000210 </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td class=" ">Pending</td>
                            <td class=" last">
                                <a href="#"><i class="fa fa-check"></i></a>
                                |
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr class="even pointer">
                            <td class=" ">3</td>
                            <td class=" ">121000210 </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td class=" ">Pending</td>
                            <td class=" last">
                                <a href="#"><i class="fa fa-check"></i></a>
                                |
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr class="even pointer">
                            <td class=" ">4</td>
                            <td class=" ">121000210 </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td class=" ">Pending</td>
                            <td class=" last">
                                <a href="#"><i class="fa fa-check"></i></a>
                                |
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr class="even pointer">
                            <td class=" ">5</td>
                            <td class=" ">121000210 </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td class=" ">Pending</td>
                            <td class=" last">
                                <a href="#"><i class="fa fa-check"></i></a>
                                |
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr class="even pointer">
                            <td class=" ">6</td>
                            <td class=" ">121000210 </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td class=" ">Pending</td>
                            <td class=" last">
                                <a href="#"><i class="fa fa-check"></i></a>
                                |
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr class="even pointer">
                            <td class=" ">7</td>
                            <td class=" ">121000210 </td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                            <td class=" ">Pending</td>
                            <td class=" last">
                                <a href="#"><i class="fa fa-check"></i></a>
                                |
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

    @endsection