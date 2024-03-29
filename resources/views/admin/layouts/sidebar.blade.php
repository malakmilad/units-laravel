  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                  <i class="bi bi-pie-chart"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('setting.edit') }}">
                  <i class="bi bi-gear"></i>
                  <span>Setting</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#form_tab" data-bs-toggle="collapse">
                  <i class="bi bi-hash"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="form_tab" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('form.index') }}">
                          <i class="bi bi-circle"></i><span>All Forms</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('form.create') }}">
                          <i class="bi bi-circle"></i><span>Add New Form</span>
                      </a>
                  </li>
              </ul>
          </li>
          @foreach ($types as $type)
              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#{{ $type->name }}-{{ $type->id }}"
                      data-bs-toggle="collapse">
                      <i class="bi bi-file-post"></i><span>{{ $type->name }}</span><i
                          class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="{{ $type->name }}-{{ $type->id }}" class="nav-content collapse "
                      data-bs-parent="#sidebar-nav">
                      <li>
                          <a href="{{ route('blogs.index', ['type' => $type->id]) }}">
                              <i class="bi bi-circle"></i><span>All {{ $type->name }}</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('blog.create', ['type' => $type->id]) }}">
                              <i class="bi bi-circle"></i><span>Add New {{ $type->name }}</span>
                          </a>
                      </li>
                      @php
                          $taxonomies = $type->taxonomies;
                      @endphp
                      @foreach ($taxonomies as $taxonomy)
                          <li>
                              <a href="{{route('terms.index',$taxonomy->id)}}">
                                  <i class="bi bi-circle"></i>
                                  <span>
                                      {{ $taxonomy->title }}
                                  </span>
                              </a>
                          </li>
                      @endforeach
                  </ul>
              </li>
          @endforeach
          <li class="nav-heading">ACF</li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('types.index') }}">
                  <i class="bi bi-hash"></i>
                  <span>Post Types</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('taxonomies.index') }}">
                  <i class="bi bi-hash"></i>
                  <span>Taxomoies</span>
              </a>
          </li>
      </ul>
  </aside>
