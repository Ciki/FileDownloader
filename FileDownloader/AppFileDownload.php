<?php


/**
 * Copyright (c) 2009, Jan Kuchař
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms,
 * with or without modification, are permitted provided
 * that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above
 *       copyright notice, this list of conditions and the following
 *       disclaimer in the documentation and/or other materials provided
 *       with the distribution.
 *     * Neither the name of the Mujserver.net nor the names of its
 *       contributors may be used to endorse or promote products derived
 *       from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @author     Jan Kuchař
 * @copyright  Copyright (c) 2014 Jan Kuchar (http://mujserver.net)
 * @license    New BSD License
 * @link       http://filedownloader.projekty.mujserver.net
 */

namespace FileDownloader;

//use App\Environment;
use Nette\Http\IRequest;
use Nette\Http\IResponse;
use Nette\Http\Request;
use Nette\Http\Response;
use Nette\Http\Session;

/**
 * @link http://filedownloader.projekty.mujserver.net
 *
 * @author      Jan Kuchař
 * @copyright   Copyright (c) 2014 Jan Kuchar
 * @author      Jan Kuchař
 */
class AppFileDownload extends BaseFileDownload implements \Nette\Application\IResponse {

	/**
	 * Downloader used to download file (optional)
	 * @var IDownloader|null
	 */
	private $downloader;

	/**
	 * @var Request
	 */
//	private $request;

	/**
	 * @var Response
	 */
//	private $response;

	/**
	 * @var Session
	 */
//	private $session;

	public function __construct(/*Request $request, Response $response, Session $session*/) {
		parent::__construct();

//		$this->request = Environment::getHttpRequest();
//		$this->response = Environment::getHttpResponse();
//		$this->session = Environment::getSession();
//		$this->request = $request;
//		$this->response = $response;
//		$this->session = $session;
	}

	public function setDownloader(IDownloader $downloader) {
		$this->downloader = $downloader;
	}

	/* Implementation of IPresenterResponse::send() */
	public function send(IRequest $httpRequest, IResponse $httpResponse) {
		parent::download($this->downloader/*, $this->request, $this->response, $this->session*/);
	}

	public function download(IDownloader $downloader = null/*, Request $request, Response $response, Session $session*/) {
		throw new \LogicException('Use Presenter::sendResponse() to send response to client.');
	}

}


