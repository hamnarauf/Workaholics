   <x-layout>
       <!--search overlay end-->
       <section class="single-block-wrapper section-padding">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-lg-9 mb-5 mb-lg-0">
                       <article>
                           <h1 class="h2">{{ $project_name }}</h1>
                           <ul class="card-meta my-3 list-inline">
                               <li class="list-inline-item">
                                   <a href="author-single.html" class="card-meta-author">
                                       <span>Freelancer: {{ $freelancer }}</span>
                                   </a>
                               </li>
                               <li class="list-inline-item">
                                   <i class="ti-timer"></i>Bid: ${{ $proposal['bid'] }}
                               </li>
                               <li class="list-inline-item">
                                   <i class="ti-calendar"></i>Expected by: {{ $proposal['deadline'] }}
                               </li>
                           </ul>
                           <div class="content">
                               <p>{{ $proposal['proposal'] }}</p>

                               <form action="/gigproposals" method="POST">
                                   @csrf
                                   {{ method_field('PUT') }}
                                   <button @if ($proposal['status'] == 'Accepted') disabled @endif
                                       class="btn btn-primary mt-2" value='Accepted' type="submit" name="status"
                                       id="submit_contact">
                                       @if ($proposal['status'] == 'Accepted')
                                           Accepted
                                       @else
                                           Accept Proposal
                                       @endif
                                   </button>
                                   <input hidden type="number" name="id" value="{{ $proposal->id }}">
                               </form>
                           </div>
                       </article>
                   </div>
                   <div class="col-lg-9 col-md-12">
                       <div class="mb-5 border-top mt-4 pt-5">
                           <div class="container">
                               <div class="row">
                                   <div class="col-md-9">
                                       <div class="card m-b-30">
                                           <div class="card-header">
                                               <div class="row align-items-center">
                                                   <div class="col-8">
                                                       <h5 class="card-title mb-0">
                                                           Attached Files
                                                       </h5>
                                                   </div>
                                                   <div class="col-4">
                                                       <ul class="list-inline-group text-right mb-1 pl-0">
                                                           <li class="list-inline-item mr-0 font-12">
                                                               <i class="feather icon-more-vertical- font-20 text-primary"></i>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="card-body">
                                               <div class="product-file-type">
                                                   <ul class="list-unstyled">
                                                       <li class="media mb-3">
                                                           <div class="media-body">
                                                               <h5 class="font-16 mb-1 d-inline">
                                                                   {{ $proposal->file }}
                                                               </h5>
                                                               <a href="{{ url('/download', $proposal->file) }}"
                                                                   class="mx-2"><i
                                                                   class="fa fa-download"aria-hidden="true"></i></a>
                                                           </div>
                                                       </li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </x-layout>
