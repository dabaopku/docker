FROM dabaopku/docker:Python

apk add --no-cache --virtual .build-deps \
	gcc \
	g++ \
	libc-dev \
	libffi-dev \
	openblas-dev \
	libsndfile-dev \
	llvm-dev \
	make \

pip install numpy argparse scipy SoundFile analytic-wfm llvmlite==0.21.0 librosa==0.6.0

