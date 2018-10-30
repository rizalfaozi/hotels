<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Repositories\ProvinceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProvinceController extends AppBaseController
{
    /** @var  ProvinceRepository */
    private $provinceRepository;

    public function __construct(ProvinceRepository $provinceRepo)
    {
        $this->provinceRepository = $provinceRepo;
    }

    /**
     * Display a listing of the Province.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->provinceRepository->pushCriteria(new RequestCriteria($request));
        $provinces = $this->provinceRepository->all();

        return view('provinces.index')
            ->with('provinces', $provinces);
    }

    /**
     * Show the form for creating a new Province.
     *
     * @return Response
     */
    public function create()
    {
        return view('provinces.create');
    }

    /**
     * Store a newly created Province in storage.
     *
     * @param CreateProvinceRequest $request
     *
     * @return Response
     */
    public function store(CreateProvinceRequest $request)
    {
        $input = $request->all();

        $province = $this->provinceRepository->create($input);

        Flash::success('Province saved successfully.');

        return redirect(route('provinces.index'));
    }

    /**
     * Display the specified Province.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $province = $this->provinceRepository->findWithoutFail($id);

        if (empty($province)) {
            Flash::error('Province not found');

            return redirect(route('provinces.index'));
        }

        return view('provinces.show')->with('province', $province);
    }

    /**
     * Show the form for editing the specified Province.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $province = $this->provinceRepository->findWithoutFail($id);

        if (empty($province)) {
            Flash::error('Province not found');

            return redirect(route('provinces.index'));
        }

        return view('provinces.edit')->with('province', $province);
    }

    /**
     * Update the specified Province in storage.
     *
     * @param  int              $id
     * @param UpdateProvinceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProvinceRequest $request)
    {
        $province = $this->provinceRepository->findWithoutFail($id);

        if (empty($province)) {
            Flash::error('Province not found');

            return redirect(route('provinces.index'));
        }

        $province = $this->provinceRepository->update($request->all(), $id);

        Flash::success('Province updated successfully.');

        return redirect(route('provinces.index'));
    }

    /**
     * Remove the specified Province from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $province = $this->provinceRepository->findWithoutFail($id);

        if (empty($province)) {
            Flash::error('Province not found');

            return redirect(route('provinces.index'));
        }

        $this->provinceRepository->delete($id);

        Flash::success('Province deleted successfully.');

        return redirect(route('provinces.index'));
    }
}
