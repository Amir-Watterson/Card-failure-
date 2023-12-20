let currentIndex = 0;
        const cards = document.querySelector('.card-container');
        const totalCards = document.querySelectorAll('.card').length;

        function showCard(index) {
            const cardWidth = document.querySelector('.card').offsetWidth;
            cards.style.transform = `translateX(${-index * cardWidth}px)`;
        }

        function nextCard() {
            currentIndex = (currentIndex + 1) % totalCards;
            showCard(currentIndex);
        }

        function prevCard() {
            currentIndex = (currentIndex - 1 + totalCards) % totalCards;
            showCard(currentIndex);
        }
        