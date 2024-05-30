@extends('app_adminkit_dosen')

@section('content-topik_penawaran_dosen')
    <div class="">
        <h1 class="h3 mb-3 mt-4"><b>Topik Penawaran</b></h1>
        <div class="col-lg-12">
            <div class="card">
                <table class="table table-bordered">
                    <thead style="background-color: #7239EA;">
                        <tr>
                            <th class="text-light" style="width:5%;">No</th>
                            <th class="text-light"style="width:30%">Bidang Minat</th>
                            <th class="d-none d-md-table-cell text-light" style="width:30%">Topik Skripsi</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><b>Data Science & Business Intelligence</b></td>
                            <td class="d-none d-md-table-cell">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Data Mining</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Text Mining</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Computer Vision</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Signal Processing</label>
                                </div>
                            </td>                            
                            
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><b>Artificial Intelligence</b></td>
                            <td class="d-none d-md-table-cell">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Natural Language Processing</label>                                
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Machine Learning</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Metaheuristics</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Robotics</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Expert System</label>
                                </div>
                            </td>                            
                           
                        </tr>

                        <tr>
                            <td>3</td>
                            <td><b>Game</b></td>
                            <td class="d-none d-md-table-cell">                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Game Intelligence</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Game Design & Developmen</label>
                                </div>                                
                            </td>
                        </tr>
                        
                        <tr>
                            <td>4</td>
                            <td><b>Human Computer Interaction</b></td>
                            <td class="d-none d-md-table-cell">
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">AR/VR</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">UI/UX</label>
                                </div>
                            </td>
                        </tr>
                            
                        <tr>
                            <td>5</td>
                            <td><b>IT Infrastructure & Networks</b></td>
                            <td class="d-none d-md-table-cell">                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Information Security</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Network Security</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Network Management</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">IT Infrastructure</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Cloud Computing</label>
                                </div>
                            </td>
                        </tr>

                         <tr>
                            <td>6</td>
                            <td><b>Embedded System</b></td>
                            <td class="d-none d-md-table-cell">
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Standalone Embedded System</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Networked Embedded System</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td><b>Enterprise System</b></td>
                            <td class="d-none d-md-table-cell">                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Business Process Management</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Data and Knowledge Management</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Enterprise Management System</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Enterprise Architecture</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td><b>Information System Management</b></td>
                            <td class="d-none d-md-table-cell">                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">IS/IT Strategy</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">IS/IT Adoption</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">IS/IT Evaluation</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">IT Risk Management</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td><b>Theoritical Foundation</b></td>
                            <td class="d-none d-md-table-cell">                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Coding Theory</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Teori Bahasa dan Otomata</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Graph Teory</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td><b>Software Engineering</b></td>
                            <td class="d-none d-md-table-cell">                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Software Requirement</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Software Design</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Software Testing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Optimization in SE</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection