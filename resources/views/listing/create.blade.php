@extends('layout.app')
@section('content')
<div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center">
                <h1>Submit Listing</h1>
            </section>
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
            @endif --}}
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <form class="form inputs-underline" method="POST" action = {{ route('listing.store') }}  enctype="multipart/form-data">
                            @csrf
                            <section>
                                <h3>About</h3>
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <label for="title">Business Title</label>
                                            <input type="text" class="form-control" name="listing_title" value="{{ old('listing_title') }}" id="title" placeholder="Title">
                                                @error('listing_title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control selectpicker" name="category" id="category">
                                                <option value="Plumbing">Plumbing</option>
                                                <option value="Electrical">Electrical</option>
                                                <option value="Automobile">Automobile</option>
                                                <option value="Fashion">Fashion</option>
                                                <option value="Nutritionist">Nutritionist</option>
                                                <option value="Wellness">Wellness</option>
                                                <option value="Interior">Interior</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--col-md-3-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="4" name="description" value="{{ old('description') }}" placeholder="Describe the listing"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" class="form-control" name="tags" id="tags" placeholder="+ Add tag">
                                </div>
                                <!--end form-group-->
                            </section>
                            <section>
                                <h3>Contact</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address-autocomplete">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="address-autocomplete" placeholder="Address">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group-->
                                            <div class="map height-200px shadow" id="map-submit"></div>
                                        <!--end map-->
                                        <div class="form-group hidden">
                                            <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                            <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                                        </div>
                                        <p class="note">Enter the exact address or drag the map marker to position</p>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="region">State</label>
                                            <select class="form-control selectpicker" name="region" id="region">
                                                <option value="">Select State</option>
                                                <option value="Lagos State">Lagos State</option>
                                                <option value="Abuja">Abuja</option>
                                                <option value="Porthacourt">Porthacourt</option>
                                                <option value="Oyo State">Oyo State</option>
                                                <option value="Sokoto State">Sokoto State</option>
                                                <option value="Kaduna State">Kaduna State</option>
                                                <option value="Kano State">Kano State</option>
                                                <option value="Imo State">Imo State</option>
                                                <option value="Enugu State">Enugu State</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="phone">Business Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Phone number">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="email">Business Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="hello@example.com">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="website">Business Website</label>
                                            <input type="text" class="form-control" name="website" value="{{ old('website') }}" id="website" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </section>
                            <section>
                                <h3>Gallery</h3>
                                <div class="file-upload-previews"></div>
                                <input type="file" name="image" />
                                @error('image')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                {{-- <div class="file-upload">
                                    <input type="file" name="gallery" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                                    
                                    <span>Click or drag images here</span>
                                </div> --}}
                                <br>
                                
                                <div class="form-group">
                                    <label for="video">Video URL</label>
                                    <input type="text" class="form-control" name="video" value="{{ old('video') }}" id="video" placeholder="http://">
                                </div>
                                <!--end form-group-->
                            </section>
                            <section>
                                <h3>Social</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="facebook">Facebook URL</label>
                                            <input type="text" class="form-control" name="facebook" value="{{ old('faebook') }}" id="facebook" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="youtube">Youtube URL</label>
                                            <input type="text" class="form-control" name="youtube" id="youtube" value="{{ old('youtube') }}" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="twitter">Twitter URL</label>
                                            <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}" id="twitter" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="pinterest">Pinterest URL</label>
                                            <input type="text" class="form-control" name="pinterest" value="{{ old('pinterest') }}" id="pinterest" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                            </section>
                            
                            
                            
                            <hr>
                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded"> Submit Listing</button>
                                </div>
                                <!--end form-group-->
                            </section>
                        </form>
                        <!--end form-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
        </div>
        <!--end container-->
    </div>
@endsection