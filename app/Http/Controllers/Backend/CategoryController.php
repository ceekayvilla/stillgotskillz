<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Contracts\CategoryContract;
use App\Http\Controllers\BaseController;

class CategoryController extends BaseController{

    protected $categoryRepository;

    public function  __construct(CategoryContract $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        $categories = $this->categoryRepository->listCategories();
        $this->setPageTitle('Categories','List of all categories');
        return view('backend.categories.index',compact('categories'));
    }

    public function create(){
        $this->setPageTitle('Categories', 'Create Category');
        return view('backend.categories.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|max:191|unique:sts_categories',
        ]);
        $params = $request->except('_token');
        $category = $this->categoryRepository->createCategory($params);
        if(!$category){
            return $this->responseRedirectBack('Error occurred while creating category','error', true, true);
        }
        return $this->responseRedirect('admin.categories.index','Category added successfully','success',false, false);
    }

    public function view(string $id){
        $category = $this->categoryRepository->findCategoryById($id);
        $this->setPageTitle('Categories', 'View Submissions for: '.$category->name);
        return view('backend.categories.view',compact('category'));
    }

    public function edit(string $id){
        $category = $this->categoryRepository->findCategoryById($id);
        $this->setPageTitle('Categories', 'Edit Category: '.$category->name);
        return view('backend.categories.edit',compact('category'));
    }

    public function update(Request $request){
        $this->validate($request,[
            'name'=>'required|max:191|unique:categories',
        ]);
        $params = $request->except('_token');
        $category = $this->categoryRepository->updateCategory($params);
        if(!$category){
            return $this->responseRedirectBack('Error occurred while updating category','error', true, true);
        }
        return $this->responseRedirect('admin.categories.index','Category updated successfully','success',false, false);
    }

    public function delete(string $id){
        $category = $this->categoryRepository->deleteCategory($id);
        if(!$category){
            return $this->responseRedirectBack('Error occurred while deleting category','error', true, true);
        }
        return $this->responseRedirect('admin.categories.index','Category deleted successfully','success',false, false);
    }

    public function trash(){
        $categories = $this->categoryRepository->trashedCategories();
        $this->setPageTitle('Categories','List of inactive categories');
        return view('backend.categories.trash',compact('categories'));
    }

    public function restore(string $id){
        $category = $this->categoryRepository->restoreCategory($id);
        if(!$category){
            return $this->responseRedirectBack('Error occurred while restoring category','error', true, true);
        }
        return $this->responseRedirect('admin.categories.trash','Category restored successfully','success',false, false);
    }
}