@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product Add - Apps')

@section('vendor-style')
  @vite(['resources/assets/vendor/libs/quill/typography.scss', 'resources/assets/vendor/libs/quill/katex.scss',
  'resources/assets/vendor/libs/quill/editor.scss', 'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/dropzone/dropzone.scss', 'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss'])
@endsection

@section('vendor-script')
  @vite(['resources/assets/vendor/libs/quill/katex.js', 'resources/assets/vendor/libs/quill/quill.js',
  'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/dropzone/dropzone.js',
  'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js', 'resources/assets/vendor/libs/tagify/tagify.js'])
@endsection

@section('page-script')
  @vite(['resources/assets/js/app-ecommerce-product-add.js'])
@endsection

@section('content')
<div class="app-blog-post">
    <div
      class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="mb-1">✍️ Add a new Blog Post</h4>
        <p class="mb-0">Create engaging content for your online gym users and drive SEO traffic.</p>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-4">
        <div class="d-flex gap-4">
          <button class="btn btn-label-secondary">Discard</button>
          <button class="btn btn-label-primary">Save Draft</button>
        </div>
        <button type="submit" class="btn btn-primary">Publish Post</button>
      </div>
    </div>

    <div class="row">
      <!-- First column-->
      <div class="col-12 col-lg-8">
        <!-- Product Information -->
        <div class="card mb-6">
            <div class="card-header">
              <h5 class="card-title mb-0">Post Content</h5>
            </div>
            <div class="card-body">
              <div class="row mb-6">
                <div class="col">
                  <label class="form-label" for="post-title">Post Title</label>
                <input type="text" class="form-control" id="post-title" placeholder="A catchy title for your gym blog post"
                  name="title" required />
                </div>
              <div class="col">
                <label class="form-label" for="post-slug">Slug (URL)</label>
                <input type="text" class="form-control" id="post-slug" placeholder="e.g. how-to-build-muscle"
                    name="slug" required />
                </div>
            </div>

              <div>
                <label class="mb-1">Post Content</label>
                <div class="form-control p-0">
                  <div class="comment-toolbar border-0 border-bottom">
                    <div class="d-flex justify-content-start">
                    <span class="ql-formats me-0">
                      <button class="ql-bold"></button>
                      <button class="ql-italic"></button>
                      <button class="ql-underline"></button>
                      <button class="ql-list" value="ordered"></button>
                      <button class="ql-list" value="bullet"></button>
                      <button class="ql-link"></button>
                      <button class="ql-image"></button>
                      <button class="ql-video"></button>
                    </span>
                    </div>
                  </div>
                  <div class="comment-editor border-0 pb-6" id="post-full-content" style="min-height: 300px;"></div>
                  <textarea name="content" style="display:none" id="quill-content-area"></textarea>
                </div>
              </div>
            </div>
          </div>


        <!-- /Product Information -->
        <!-- Media -->
        <div class="card mb-6">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 card-title">Post Image</h5>
            <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
          </div>
          <div class="card-body">
            <form action="/upload" class="dropzone needsclick p-0" id="dropzone-basic">
              <div class="dz-message needsclick">
                <p class="h4 needsclick pt-3 mb-2">Drag and drop your image here</p>
                <p class="h6 text-body-secondary d-block fw-normal mb-2">or</p>
                <span class="needsclick btn btn-sm btn-label-primary" id="btnBrowse">Browse image</span>
              </div>
              <div class="fallback">
                <input name="file" type="file" />
              </div>
            </form>
          </div>
        </div>
        <!-- /Media -->

        <!-- Inventory -->
        <div class="card mb-6">
            <div class="card-header">
            <h5 class="card-title mb-0">Advanced SEO & Technical Settings</h5>
          </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4 col-xl-5 col-xxl-4 mx-auto card-separator">
                  <div class="d-flex justify-content-between flex-column mb-4 mb-md-0 pe-md-4">
                    <div class="nav-align-left">
                      <ul class="nav nav-pills flex-column w-100">
                        <li class="nav-item">
                          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#seo-metadata">
                            <i class="icon-base ti tabler-seo icon-sm me-1_5"></i>
                            <span class="align-middle">SEO Metadata</span>
                          </button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#seo-analysis">
                            <i class="icon-base ti tabler-rocket icon-sm me-1_5"></i>
                            <span class="align-middle">SEO Analysis</span>
                          </button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#technical-options">
                            <i class="icon-base ti tabler-settings icon-sm me-1_5"></i>
                            <span class="align-middle">Technical Options</span>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-8 col-xl-7 col-xxl-8 pt-6 pt-md-0">
                  <div class="tab-content p-0 ps-md-4">
                    <div class="tab-pane fade show active" id="seo-metadata" role="tabpanel">
                      <div class="mb-6">
                        <label class="form-label" for="seo-title">SEO Title (Max 60 chars)</label>
                        <input type="text" class="form-control" id="seo-title" placeholder="Meta Title for search engines"
                          name="seo_title" maxlength="60" />
                        <small class="text-body-secondary float-end mt-1" id="seo-title-count">0/60</small>
                      </div>
                      <div class="mb-6">
                        <label class="form-label" for="seo-description">Meta Description (Max 160 chars)</label>
                        <textarea class="form-control" id="seo-description" rows="3"
                          placeholder="Short summary for search results" name="seo_description"
                          maxlength="160"></textarea>
                        <small class="text-body-secondary float-end mt-1" id="seo-description-count">0/160</small>
                      </div>
                      <div>
                        <label class="form-label" for="focus-keyword">Focus Keyword</label>
                        <input type="text" class="form-control" id="focus-keyword"
                          placeholder="e.g. 'home workout guide'" name="focus_keyword" />
                        <small class="text-body-secondary">The main phrase you want to rank for.</small>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="seo-analysis" role="tabpanel">
                      <h6 class="mb-3 text-body">SEO Score <span class="badge bg-warning ms-2">Needs Improvement</span></h6>
                      <div class="progress mb-4" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <ul class="list-unstyled mb-0">
                        <li class="text-success mb-2"><i class="ti ti-circle-check icon-xs me-2"></i> Keyword in SEO Title</li>
                        <li class="text-danger mb-2"><i class="ti ti-circle-x icon-xs me-2"></i> Content length is too short (min 300 words)</li>
                        <li class="text-warning mb-2"><i class="ti ti-alert-triangle icon-xs me-2"></i> Image Alt attribute missing</li>
                      </ul>
                      <p class="mt-4 mb-0"><small>The SEO score and checklist update dynamically as you type (requires `app-blog-post-add.js`).</small></p>
                    </div>

                    <div class="tab-pane fade" id="technical-options" role="tabpanel">
                      <div class="mb-6">
                        <label class="form-label" for="canonical-url">Canonical URL (Optional)</label>
                        <input type="url" class="form-control" id="canonical-url"
                          placeholder="Leave blank for self-referencing" name="canonical_url" />
                        <small class="text-body-secondary">Use this if the content is duplicated from another source.</small>
                      </div>
                      <div class="mb-6">
                        <label class="form-label" for="redirect-url">301 Redirect (Optional)</label>
                        <input type="url" class="form-control" id="redirect-url"
                          placeholder="Where to redirect if this post is unpublished" name="redirect_url" />
                        <small class="text-body-secondary">Set a permanent redirect path (e.g., to the blog index).</small>
                      </div>
                      <div class="form-check form-switch mb-4">
                        <input class="form-check-input" type="checkbox" id="noindex-post" name="noindex" />
                        <label class="form-check-label" for="noindex-post">
                          **Prevent Indexing (Add `noindex` tag)**
                        </label>
                        <small class="d-block text-body-secondary">Disallow search engines from indexing this page.</small>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </div>
        <!-- /Inventory -->
        </div>
      <!-- /Second column -->

      <!-- Second column -->
      <div class="col-12 col-lg-4">

        <!-- Organize Card -->
        <div class="card mb-6">
            <div class="card-header">
              <h5 class="card-title mb-0">Organize & Publish</h5>
            </div>
            <div class="card-body">
              <div class="mb-6 col ecommerce-select2-dropdown">
                <label class="form-label mb-1" for="post-author"> Author </label>
                <select id="post-author" class="select2 form-select" data-placeholder="Select Author" name="author_id">
                  <option value="">Select Author</option>
                  <option value="1">Jane Doe</option>
                  <option value="2">John Smith</option>
                </select>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="mb-6 col ecommerce-select2-dropdown">
                  <label class="form-label mb-1" for="post-category">
                    <span>Category</span>
                  </label>
                  <select id="post-category" class="select2 form-select" data-placeholder="Select Category"
                    name="category_id">
                    <option value="">Select Category</option>
                    <option value="1">Workout Plans</option>
                    <option value="2">Nutrition Tips</option>
                    <option value="3">Motivation</option>
                  </select>
                </div>
                <a href="javascript:void(0);" class="fw-medium btn btn-icon btn-label-primary ms-4" data-bs-toggle="modal"
                  data-bs-target="#addCategoryModal"><i class="icon-base ti tabler-plus icon-md"></i></a>
              </div>

              <div class="mb-6">
                <label for="post-tags" class="form-label mb-1">Tags (SEO)</label>
                <input id="post-tags" class="form-control" name="tags"
                  value="fitness,gym,home-workout,diet" aria-label="Post Tags" />
              </div>

              <div class="mb-6 col ecommerce-select2-dropdown">
                <label class="form-label mb-1" for="post-status">Status </label>
                <select id="post-status" class="select2 form-select" data-placeholder="Published" name="status">
                  <option value="published">Published</option>
                  <option value="draft" selected>Draft</option>
                  <option value="pending">Pending Review</option>
                </select>
              </div>

              <div>
                <label class="form-label mb-1" for="publish-date">Publish Date</label>
                <input type="text" class="form-control flatpickr" id="publish-date"
                  placeholder="Select Date & Time" name="published_at" />
                <small class="text-body-secondary">Leave blank for immediate publish or set a future date/time for scheduling.</small>
              </div>

            </div>
        <!-- /Organize Card -->
      </div>
      <!-- /Second column -->
    </div>
  </div>

  <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCategoryModalTitle">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST">
          @csrf
          <div class="modal-body">
            <label for="new-category-name" class="form-label">Category Name</label>
            <input type="text" id="new-category-name" class="form-control" placeholder="e.g. Yoga & Mobility" name="name" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Category</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
