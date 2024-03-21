<div style="display: flex; justify-content: space-between;">
    <div>
        <a href="{{ url('kategori/' . $id . '/edit') }}" class="btn btn-primary" style="margin-right: 10px;">
            <i class="fa fa-edit"></i>
        </a>
    </div>
    <div>
        <form action="{{ url('kategori/' . $id . '/delete') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    </div>
</div>