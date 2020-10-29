import React from 'react';
import styled from 'styled-components';

import Link from 'next/link';

const Switcher = styled.div`
  display: flex;
  flex-direction: column;
`

const LanguageSwitcher = ({languages}) => (
  <Switcher>
    {languages.map(language =>
      <Link href="/" locale={language}>
        <a>{language}</a>
      </Link>
    )}
  </Switcher>
);

export default LanguageSwitcher;
